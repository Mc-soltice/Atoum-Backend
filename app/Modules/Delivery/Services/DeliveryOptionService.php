<?php

namespace App\Modules\Delivery\Services;

use App\Modules\Delivery\Models\DeliveryOption;
use App\Modules\Delivery\Repositories\DeliveryOptionRepository;
use Illuminate\Database\Eloquent\Collection;

class DeliveryOptionService
{
    public function __construct(
        private DeliveryOptionRepository $repository
    ) {}

    public function getAllOptions(array $filters = []): \Illuminate\Pagination\LengthAwarePaginator
    {
        return $this->repository->all($filters);
    }

    public function getOption(string $id): ?DeliveryOption
    {
        return $this->repository->find($id);
    }

    public function createOption(array $data): DeliveryOption
    {
        return $this->repository->create($data);
    }

    public function updateOption(DeliveryOption $deliveryOption, array $data): DeliveryOption
    {
        return $this->repository->update($deliveryOption, $data);
    }

    public function deleteOption(DeliveryOption $deliveryOption): bool
    {
        // Vérifier si l'option est utilisée dans des commandes
        if ($deliveryOption->orders()->exists()) {
            throw new \Exception('Impossible de supprimer une option de livraison utilisée dans des commandes');
        }

        return $this->repository->delete($deliveryOption);
    }

    public function getAvailableOptions(): Collection
    {
        return $this->repository->getActiveOptions();
    }

    public function toggleActive(DeliveryOption $deliveryOption): DeliveryOption
    {
        $deliveryOption->update([
            'is_active' => !$deliveryOption->is_active
        ]);

        return $deliveryOption->fresh();
    }

    public function reorderOptions(array $orderData): void
    {
        $this->repository->reorder($orderData);
    }
}