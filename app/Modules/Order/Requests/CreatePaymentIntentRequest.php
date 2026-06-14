<?php

namespace App\Modules\Order\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Request validator pour créer un PaymentIntent Stripe
 */
class CreatePaymentIntentRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'order_id' => 'required|uuid|exists:orders,id',
    ];
  }

  public function messages(): array
  {
    return [
      'order_id.required' => 'L\'ID de la commande est requis',
      'order_id.uuid' => 'L\'ID de la commande doit être un UUID valide',
      'order_id.exists' => 'La commande n\'existe pas',
    ];
  }
}
