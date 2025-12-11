<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarAvailabilityController extends Controller
{
    /**
     * Check car availability for booking times.
     */
    public function check(Request $request)
    {
        $carId = $request->input('car_id');
        $bookingFrom = Carbon::parse($request->input('booking_from'));
        $tripDuration = (int) $request->input('trip_duration', 0);
        $bookingTo = Carbon::parse($request->input('booking_to'));
        $returnDuration = (int) $request->input('return_duration', 0);

        // حساب وقت انتهاء الذهاب
        $departureEnd = $bookingFrom->copy()->addMinutes($tripDuration);

        // حساب وقت انتهاء العودة
        $returnEnd = $bookingTo->copy()->addMinutes($returnDuration);

        // التحقق من تعارض الذهاب
        $departureConflict = Booking::where('car_id', $carId)
            ->where('id', '!=', $request->input('booking_id', 0)) // استثناء الحجز الحالي عند التعديل
            ->where(function ($query) use ($bookingFrom, $departureEnd) {
                $query->where(function ($q) use ($bookingFrom) {
                    // الحجز الحالي يبدأ أثناء حجز موجود
                    $q->where('booking_from', '<=', $bookingFrom)
                        ->whereRaw('DATE_ADD(booking_from, INTERVAL trip_duration MINUTE) >= ?', [$bookingFrom]);
                })
                    ->orWhere(function ($q) use ($departureEnd) {
                        // الحجز الحالي ينتهي أثناء حجز موجود
                        $q->where('booking_from', '<=', $departureEnd)
                            ->whereRaw('DATE_ADD(booking_from, INTERVAL trip_duration MINUTE) >= ?', [$departureEnd]);
                    })
                    ->orWhere(function ($q) use ($bookingFrom, $departureEnd) {
                        // الحجز الحالي يغطي حجز موجود بالكامل
                        $q->where('booking_from', '>=', $bookingFrom)
                            ->whereRaw('DATE_ADD(booking_from, INTERVAL trip_duration MINUTE) <= ?', [$departureEnd]);
                    });
            })
            ->first();

        if ($departureConflict) {
            $conflictStart = Carbon::parse($departureConflict->booking_from);
            $conflictEnd = $conflictStart->copy()->addMinutes($departureConflict->trip_duration ?? 0);

            return response()->json([
                'available' => false,
                'message' => sprintf(
                    'السيارة محجوزة في رحلة الذهاب من %s إلى %s (الغرفة: %s)',
                    $conflictStart->format('Y-m-d H:i'),
                    $conflictEnd->format('H:i'),
                    $departureConflict->room_name
                ),
                'conflict' => 'departure',
            ]);
        }

        // التحقق من تعارض العودة
        $returnConflict = Booking::where('car_id', $carId)
            ->where('id', '!=', $request->input('booking_id', 0))
            ->where(function ($query) use ($bookingTo, $returnEnd) {
                $query->where(function ($q) use ($bookingTo) {
                    // العودة تبدأ أثناء حجز موجود
                    $q->where('booking_to', '<=', $bookingTo)
                        ->whereRaw('DATE_ADD(booking_to, INTERVAL return_duration_minutes MINUTE) >= ?', [$bookingTo]);
                })
                    ->orWhere(function ($q) use ($returnEnd) {
                        // العودة تنتهي أثناء حجز موجود
                        $q->where('booking_to', '<=', $returnEnd)
                            ->whereRaw('DATE_ADD(booking_to, INTERVAL return_duration_minutes MINUTE) >= ?', [$returnEnd]);
                    })
                    ->orWhere(function ($q) use ($bookingTo, $returnEnd) {
                        // العودة تغطي حجز موجود بالكامل
                        $q->where('booking_to', '>=', $bookingTo)
                            ->whereRaw('DATE_ADD(booking_to, INTERVAL return_duration_minutes MINUTE) <= ?', [$returnEnd]);
                    });
            })
            ->first();

        if ($returnConflict) {
            $conflictStart = Carbon::parse($returnConflict->booking_to);
            $conflictEnd = $conflictStart->copy()->addMinutes($returnConflict->return_duration_minutes ?? 0);

            return response()->json([
                'available' => false,
                'message' => sprintf(
                    'السيارة محجوزة في رحلة العودة من %s إلى %s (الغرفة: %s)',
                    $conflictStart->format('Y-m-d H:i'),
                    $conflictEnd->format('H:i'),
                    $returnConflict->room_name
                ),
                'conflict' => 'return',
            ]);
        }

        return response()->json([
            'available' => true,
            'message' => 'السيارة متاحة',
        ]);
    }
}
