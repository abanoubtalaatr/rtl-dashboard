<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInternalBookingRequest extends FormRequest
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
            'car_id' => 'required|exists:cars,id',
            'car_type_id' => 'required|exists:car_types,id',
            'room_name' => 'required|string|max:255',
            'payment_type' => 'required|in:cash,visa,credit',
            'number_of_people' => 'required|integer|min:1',
            'driver_id' => 'required|exists:drivers,id',
            'booking_from' => 'required|date',
            'trip_duration' => 'required|integer|min:1',
            'company_id' => 'required|exists:companies,id',
            'departure_from' => 'required|string|max:255',
            'departure_to' => 'required|string|max:255',
            'return_driver_id' => 'nullable|exists:drivers,id',
            'booking_to' => 'required|date|after:booking_from',
            'return_duration_minutes' => 'required|integer|min:1',
            'return_from' => 'nullable|string|max:255',
            'return_to' => 'nullable|string|max:255',
            'cost' => 'required|numeric|min:0',
            'booking_price' => 'required|numeric|min:0',
            'currency_id' => 'required|exists:currencies,id',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'car_id' => 'السيارة',
            'car_type_id' => 'نوع السيارة',
            'room_name' => 'رقم الغرفة',
            'payment_type' => 'نوع الدفع',
            'number_of_people' => 'عدد الأفراد',
            'driver_id' => 'السائق',
            'booking_from' => 'التاريخ والوقت',
            'trip_duration' => 'مدة الحجز',
            'company_id' => 'الشركة',
            'departure_from' => 'من (From)',
            'departure_to' => 'إلى (To)',
            'return_driver_id' => 'سائق العودة',
            'booking_to' => 'تاريخ ووقت العودة',
            'return_duration_minutes' => 'مدة العودة',
            'return_from' => 'من (العودة)',
            'return_to' => 'إلى (العودة)',
            'cost' => 'التكلفة',
            'booking_price' => 'سعر الحجز',
            'currency_id' => 'العملة',
        ];
    }
}
