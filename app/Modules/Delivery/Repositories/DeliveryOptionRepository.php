<?php

namespace App\Modules\Delivery\Repositories;

use App\Modules\Delivery\Models\DeliveryOption;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class DeliveryOptionRepository
{
    public function all(array $filters = []): LengthAwarePaginator
    {
        $query = DeliveryOption::query();

        if (isset($filters['is_active'])) {
            $query->where('is_active', $filters['is_active']);
        }

        if (isset($filters['search'])) {
            $query->where('name', 'like', '%' . $filters['search'] . '%');
        }

        return $query->ordered()->paginate(15);
    }

    public function find(string $id): ?DeliveryOption
    {
        return DeliveryOption::find($id);
    }

    public function findActive(string $id): ?DeliveryOption
    {
        return DeliveryOption::active()->find($id);
    }

    public function create(array $data): DeliveryOption
    {
        return DeliveryOption::create($data);
    }

    public function update(DeliveryOption $deliveryOption, array $data): DeliveryOption
    {
        $deliveryOption->update($data);
        return $deliveryOption->fresh();
    }

    public function delete(DeliveryOption $deliveryOption): bool
    {
        return $deliveryOption->delete();
    }

    public function getActiveOptions(): Collection
    {
        return DeliveryOption::active()->ordered()->get();
    }

    public function reorder(array $orderData): void
    {
        foreach ($orderData as $item) {
            DeliveryOption::where('id', $item['id'])->update(['order' => $item['order']]);
        }
    }
}