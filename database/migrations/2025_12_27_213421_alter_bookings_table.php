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
            $table->foreignId('external_location_id_departure')->nullable()->after('departure_from_location_id')->constrained('external_locations')->onDelete('set null');
            $table->foreignId('external_location_id_return')->nullable()->after('return_from_location_id')->constrained('external_locations')->onDelete('set null');
            //departure_to_location_id
            $table->foreignId('departure_to_location_id')->nullable()->change();
            $table->foreignId('return_to_location_id')->nullable()->change();
            $table->foreignId('return_from_location_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
};
