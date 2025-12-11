<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', 'string', Rule::in(['internal', 'external'])],
            'customer_id' => ['nullable', 'exists:customers,id'],
            'company_id' => ['nullable', 'exists:companies,id'],
            'driver_id' => ['required', 'exists:drivers,id'],
            'car_id' => ['nullable', 'exists:cars,id'],
            'booking_from' => ['required', 'date'],
            'booking_to' => ['required', 'date', 'after:booking_from'],
            'cost' => ['required', 'numeric', 'min:0'],
            'booking_price' => ['required', 'numeric', 'min:0'],
            'currency_id' => ['required', 'exists:currencies,id'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'type.required' => 'نوع الحجز مطلوب.',
            'type.in' => 'نوع الحجز يجب أن يكون داخلي أو خارجي.',
            'driver_id.required' => 'السائق مطلوب.',
            'driver_id.exists' => 'السائق المحدد غير موجود.',
            'car_id.exists' => 'السيارة المحددة غير موجودة.',
            'customer_id.exists' => 'العميل المحدد غير موجود.',
            'company_id.exists' => 'الشركة المحددة غير موجودة.',
            'booking_from.required' => 'تاريخ ووقت البداية مطلوب.',
            'booking_from.date' => 'تاريخ ووقت البداية غير صحيح.',
            'booking_to.required' => 'تاريخ ووقت النهاية مطلوب.',
            'booking_to.date' => 'تاريخ ووقت النهاية غير صحيح.',
            'booking_to.after' => 'تاريخ ووقت النهاية يجب أن يكون بعد تاريخ ووقت البداية.',
            'cost.required' => 'التكلفة مطلوبة.',
            'cost.numeric' => 'التكلفة يجب أن تكون رقماً.',
            'cost.min' => 'التكلفة يجب أن تكون أكبر من أو تساوي صفر.',
            'booking_price.required' => 'سعر الحجز مطلوب.',
            'booking_price.numeric' => 'سعر الحجز يجب أن يكون رقماً.',
            'booking_price.min' => 'سعر الحجز يجب أن يكون أكبر من أو يساوي صفر.',
            'currency_id.required' => 'العملة مطلوبة.',
            'currency_id.exists' => 'العملة المحددة غير موجودة.',
        ];
    }
}
