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
        Schema::create('retrieveds', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('room_number')->nullable();
            $table->foreignId('currency_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->decimal('amount', 12, 2);
            $table->foreignId('booking_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retrieveds');
    }
};
