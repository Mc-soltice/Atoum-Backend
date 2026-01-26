<?php
namespace App\Modules\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;
class DeleteProductImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image_id' => 'required|exists:product_images,id',
        ];
    }
}
