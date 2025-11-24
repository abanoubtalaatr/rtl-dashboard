<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // نوع السيارة
            $table->foreignId('car_type_id')->nullable()->after('car_id')->constrained()->onDelete('cascade');
            
            // للحجز الداخلي: اسم الغرفة بدلاً من العميل
            $table->string('room_name')->nullable()->after('customer_id');
            
            // عدد الأفراد
            $table->integer('number_of_people')->default(1)->after('room_name');
            
            // نوع الدفع
            $table->enum('payment_type', ['cash', 'visa', 'credit'])->default('cash')->after('booking_price');
            
            // حقول العودة
            $table->foreignId('return_driver_id')->nullable()->after('driver_id')->constrained('drivers')->onDelete('cascade');
            $table->time('return_time')->nullable()->after('booking_to');
            $table->integer('return_duration_minutes')->nullable()->after('return_time'); // مدة العودة بالدقائق
            
            // التشغيلة - الذهاب
            $table->foreignId('departure_from_location_id')->nullable()->after('number_of_people')->constrained('locations')->onDelete('set null');
            $table->foreignId('departure_to_location_id')->nullable()->after('departure_from_location_id')->constrained('locations')->onDelete('set null');
            
            // التشغيلة - العودة
            $table->foreignId('return_from_location_id')->nullable()->after('return_duration_minutes')->constrained('locations')->onDelete('set null');
            $table->foreignId('return_to_location_id')->nullable()->after('return_from_location_id')->constrained('locations')->onDelete('set null');
            
            // المستخدم اللي عمل الحجز
            $table->foreignId('created_by')->nullable()->after('currency_id')->constrained('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['car_type_id']);
            $table->dropForeign(['return_driver_id']);
            $table->dropForeign(['departure_from_location_id']);
            $table->dropForeign(['departure_to_location_id']);
            $table->dropForeign(['return_from_location_id']);
            $table->dropForeign(['return_to_location_id']);
            $table->dropForeign(['created_by']);
            
            $table->dropColumn([
                'car_type_id',
                'room_name',
                'number_of_people',
                'payment_type',
                'return_driver_id',
                'return_time',
                'return_duration_minutes',
                'departure_from_location_id',
                'departure_to_location_id',
                'return_from_location_id',
                'return_to_location_id',
                'created_by',
            ]);
        });
    }
};
