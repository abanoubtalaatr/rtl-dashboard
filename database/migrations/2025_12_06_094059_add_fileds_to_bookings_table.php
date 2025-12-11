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
            $table->foreignId('return_car_id')->nullable()->constrained('cars')->onDelete('cascade');
            $table->boolean('has_return')->default(false);
            $table->foreignId('supervisor_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->float('commission_for_driver')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['return_car_id']);
            $table->dropColumn('return_car_id');
            $table->dropColumn('has_return');
            $table->dropForeign(['supervisor_id']);
            $table->dropColumn('supervisor_id');
            $table->dropColumn('commission_for_driver');
        });
    }
};
