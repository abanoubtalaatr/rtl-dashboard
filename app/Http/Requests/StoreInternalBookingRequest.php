<?php

namespace App\Http\Requests;

use App\Models\Booking;
use App\Models\Setting;
use Illuminate\Foundation\Http\FormRequest;

class StoreInternalBookingRequest extends FormRequest
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
            'car_id' => [
                'required',
                'exists:cars,id',
                function ($attribute, $value, $fail) {
                    $bookingFrom = $this->input('booking_from');
                    $bookingTo = $this->input('booking_to');

                    if (! $bookingFrom || ! $bookingTo) {
                        return;
                    }

                    if (Setting::get('enable_check_the_car_available', true)) {
                        // Check for overlapping bookings for the departure car
                        $overlappingBooking = Booking::where('car_id', $value)
                            ->where(function ($query) use ($bookingFrom, $bookingTo) {
                                $query->where(function ($q) use ($bookingFrom) {
                                    // New booking starts during or at the same time as an existing booking
                                    $q->where('booking_from', '<=', $bookingFrom)
                                        ->where('booking_to', '>', $bookingFrom);
                                })->orWhere(function ($q) use ($bookingTo) {
                                    // New booking ends during an existing booking
                                    $q->where('booking_from', '<', $bookingTo)
                                        ->where('booking_to', '>=', $bookingTo);
                                })->orWhere(function ($q) use ($bookingFrom, $bookingTo) {
                                    // Existing booking starts during the new booking
                                    $q->where('booking_from', '>=', $bookingFrom)
                                        ->where('booking_from', '<', $bookingTo);
                                });
                            })
                            ->exists();

                        if ($overlappingBooking) {
                            $fail('السيارة محجوزة بالفعل في هذا الوقت. يرجى اختيار وقت آخر.');
                        }
                    }
                },
            ],
            'car_type_id' => 'required|exists:car_types,id',
            'room_name' => 'required|string|max:255',
            'payment_type' => 'required',
            'number_of_people' => 'required|integer|min:1',
            'driver_id' => 'required|exists:drivers,id',
            'booking_from' => 'nullable|date',
            'trip_duration' => 'required|integer|min:1',
            'company_id' => 'required|exists:companies,id',
            'departure_from' => 'nullable|string|max:255',
            'departure_to' => 'nullable|string|max:255',
            'return_driver_id' => 'nullable|exists:drivers,id',
            'booking_to' => 'required|date|after:booking_from',
            'return_duration_minutes' => 'required|integer|min:1',
            'return_from' => 'nullable|string|max:255',
            'return_to' => 'nullable|string|max:255',
            'cost' => 'nullable|numeric|min:0',
            'booking_price' => 'required|numeric|min:0',
            'currency_id' => 'required|exists:currencies,id',
            'departure_from_location_id' => 'required',
            'departure_to_location_id' => 'required',
            'return_from_location_id' => 'required',
            'return_to_location_id' => 'required',
            'supervisor_id' => 'required|exists:supervisors,id',
            'commission_for_driver' => 'required|numeric|min:0',
            'return_car_id' => [
                'nullable',
                'exists:cars,id',
            ],
            'has_return' => 'nullable',
            'on_phone' => 'nullable',
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
            'room_name' => 'اسم الغرفة',
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
            'return_car_id' => 'سيارة العودة',
        ];
    }

    /**
     * Get custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => 'حقل :attribute مطلوب.',
            'exists' => ':attribute المحدد غير صحيح.',
            'date' => 'حقل :attribute يجب أن يكون تاريخ صحيح.',
            'after' => 'يجب أن يكون :attribute بعد :date.',
            'integer' => 'حقل :attribute يجب أن يكون رقم صحيح.',
            'numeric' => 'حقل :attribute يجب أن يكون رقم.',
            'min.numeric' => 'حقل :attribute يجب أن يكون على الأقل :min.',
            'min.integer' => 'حقل :attribute يجب أن يكون على الأقل :min.',
            'max.string' => 'حقل :attribute يجب ألا يتجاوز :max حرف.',
            'in' => ':attribute المحدد غير صحيح.',
            'booking_to.after' => 'يجب أن يكون تاريخ ووقت العودة بعد التاريخ والوقت.',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        // If booking_from is provided and trip_duration is provided, calculate booking_to
        if ($this->has('booking_from') && $this->has('trip_duration')) {
            $bookingFrom = $this->input('booking_from');
            $tripDuration = $this->input('trip_duration');

            if ($bookingFrom && $tripDuration) {
                $bookingTo = date('Y-m-d H:i:s', strtotime("{$bookingFrom} +{$tripDuration} minutes"));
                $this->merge(['booking_to' => $bookingTo]);
            }
        }
    }
}
