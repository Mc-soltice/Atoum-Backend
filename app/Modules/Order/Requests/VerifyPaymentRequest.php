<?php

namespace App\Modules\Order\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Request validator pour vérifier et finaliser un paiement
 */
class VerifyPaymentRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'payment_intent_id' => 'required|string',
    ];
  }

  public function messages(): array
  {
    return [
      'payment_intent_id.required' => 'L\'ID PaymentIntent est requis',
      'payment_intent_id.string' => 'L\'ID PaymentIntent doit être une chaîne de caractères',
    ];
  }
}
