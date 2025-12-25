<?php

namespace App\Http\Requests;

use App\Models\Booking;
use App\Models\Setting;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateInternalBookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $bookingId = $this->route('internal_booking')->id;
        
        return [
            // Main booking fields
            'departure_from_location_id' => 'required|exists:locations,id',
            'departure_to_location_id'   => 'required|exists:locations,id',
            'supervisor_id'              => 'required|exists:supervisors,id',
            'car_type_id'                => 'required|exists:car_types,id',
            'room_name'                  => 'required|string|max:255',
            'payment_type'               => 'required', // adjust if needed
            'number_of_people'           => 'required|integer|min:1',
            'driver_id'                  => 'required|exists:drivers,id',
            'trip_duration'              => 'required|integer|min:1',
            'company_id'                 => 'required|exists:companies,id',
            'commission_for_driver'      => 'required|numeric|min:0',
            'booking_price'              => 'required|numeric|min:0',
            'currency_id'                => 'required|exists:currencies,id',
            'booking_from'               => 'required|date',

            // Car availability check (exclude current booking)
            'car_id' => [
                'required',
                'exists:cars,id',
                function ($attribute, $value, $fail) use ($bookingId) {
                    $bookingFrom = $this->input('booking_from');
                    $bookingTo   = $this->input('booking_to') ?? $this->calculateBookingTo();

                    if (!$bookingFrom || !$bookingTo) return;

                    if (Setting::get('enable_check_the_car_available', true)) {
                        $overlapping = Booking::where('car_id', $value)
                            ->where('id', '!=', $bookingId)
                            ->where(function ($q) use ($bookingFrom, $bookingTo) {
                                $q->where(function ($sub) use ($bookingFrom, $bookingTo) {
                                    $sub->where('booking_from', '<=', $bookingFrom)
                                        ->where('booking_to', '>', $bookingFrom);
                                })->orWhere(function ($sub) use ($bookingFrom, $bookingTo) {
                                    $sub->where('booking_from', '<', $bookingTo)
                                        ->where('booking_to', '>=', $bookingTo);
                                })->orWhere(function ($sub) use ($bookingFrom, $bookingTo) {
                                    $sub->where('booking_from', '>=', $bookingFrom)
                                        ->where('booking_from', '<', $bookingTo);
                                });
                            })
                            ->exists();

                        if ($overlapping) {
                            $fail('السيارة محجوزة بالفعل في هذا الوقت.');
                        }
                    }
                },
            ],

            // Return fields - conditional based on has_return checkbox
            'has_return' => 'nullable|boolean',
            'booking_to' => 'nullable|date|after:booking_from',
            'return_duration_minutes' => 'nullable|integer|min:1',
            'return_from_location_id' => 'nullable|exists:locations,id',
            'return_to_location_id'   => 'nullable|exists:locations,id',
            'return_driver_id'        => 'nullable|exists:drivers,id',
            'return_car_id'           => 'nullable|exists:cars,id',
            'on_phone'                => 'nullable|boolean',
        ];
    }

    protected function prepareForValidation()
    {
        // Auto-calculate booking_to if not provided (like in create)
        if ($this->filled('booking_from') && $this->filled('trip_duration') && !$this->has('booking_to')) {
            $bookingFrom = $this->input('booking_from');
            $duration = $this->input('trip_duration');
            $bookingTo = date('Y-m-d H:i:s', strtotime("{$bookingFrom} + {$duration} minutes"));
            $this->merge(['booking_to' => $bookingTo]);
        }

        // Normalize checkboxes
        $this->merge([
            'has_return' => $this->has('has_return'),
            'on_phone'   => $this->has('on_phone'),
        ]);
    }

    public function attributes(): array
    {
        return [
            'car_id'                     => 'السيارة',
            'car_type_id'                => 'نوع السيارة',
            'room_name'                  => 'رقم الغرفة',
            'payment_type'               => 'نوع الدفع',
            'number_of_people'           => 'عدد الأفراد',
            'driver_id'                  => 'السائق',
            'booking_from'               => 'تاريخ ووقت الانطلاق',
            'trip_duration'              => 'مدة الرحلة (دقائق)',
            'company_id'                 => 'الشركة',
            'booking_price'              => 'سعر الحجز',
            'currency_id'                => 'العملة',
            'departure_from_location_id' => 'من',
            'departure_to_location_id'   => 'إلى',
            'supervisor_id'              => 'المشرف',
            'commission_for_driver'      => 'عمولة السائق',
            'return_car_id'              => 'سيارة العودة',
            'return_driver_id'           => 'سائق العودة',
            'booking_to'                 => 'تاريخ ووقت العودة',
            'return_duration_minutes'    => 'مدة العودة (دقائق)',
            'return_from_location_id'    => 'من (عودة)',
            'return_to_location_id'      => 'إلى (عودة)',
        ];
    }

    protected function calculateBookingTo()
    {
        if ($this->filled('booking_from') && $this->filled('trip_duration')) {
            $from = $this->input('booking_from');
            $duration = $this->input('trip_duration');
            return date('Y-m-d H:i:s', strtotime("{$from} + {$duration} minutes"));
        }
        return null;
    }
}