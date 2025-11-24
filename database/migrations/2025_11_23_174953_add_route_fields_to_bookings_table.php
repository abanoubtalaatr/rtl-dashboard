<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // مدة الرحلة للذهاب
            $table->integer('trip_duration')->nullable()->after('booking_from')->comment('Trip duration in minutes');
            
            // From and To fields (separate)
            $table->string('departure_from')->nullable()->after('number_of_people')->comment('Departure from location');
            $table->string('departure_to')->nullable()->after('departure_from')->comment('Departure to location');
            
            // Return From and To fields
            $table->string('return_from')->nullable()->after('return_duration_minutes')->comment('Return from location');
            $table->string('return_to')->nullable()->after('return_from')->comment('Return to location');
            
            // Keep old route fields for backward compatibility
            $table->text('departure_route')->nullable()->after('return_to')->comment('From - To route text (legacy)');
            $table->text('return_route')->nullable()->after('departure_route')->comment('Return route text (legacy)');
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn([
                'trip_duration', 
                'departure_from', 
                'departure_to', 
                'return_from', 
                'return_to',
                'departure_route', 
                'return_route'
            ]);
        });
    }
};
