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
        Schema::table('cars', function (Blueprint $table) {
            $table->enum('status', ['parking', 'rest', 'traffic', 'maintenance', 'working'])
                ->default('parking')
                ->after('car_type_id');
            $table->text('status_notes')->nullable()->after('status');
            $table->timestamp('status_updated_at')->nullable()->after('status_notes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('status_notes');
            $table->dropColumn('status_updated_at');
        });
    }
};
