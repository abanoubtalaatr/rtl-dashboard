<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. أولاً: أضف العمود الجديد
        Schema::table('car_expenses', function (Blueprint $table) {
            if (!Schema::hasColumn('car_expenses', 'total_cost')) {
                $table->decimal('total_cost', 12, 2)->default(0)->after('description');
            }
        });

        // 2. ثانيًا: املأ القيم للسجلات الموجودة مسبقًا
        DB::statement("
            UPDATE car_expenses 
            SET total_cost = COALESCE((
                SELECT SUM(CAST(json_unquote(json_extract(items, CONCAT('$[', numbers.n, '].cost'))) AS DECIMAL(12,2)))
                FROM (
                    SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 
                    UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9
                ) numbers
                WHERE numbers.n < JSON_LENGTH(items)
            ), 0)
        ");
    }

    public function down(): void
    {
        Schema::table('car_expenses', function (Blueprint $table) {
            if (Schema::hasColumn('car_expenses', 'total_cost')) {
                $table->dropColumn('total_cost');
            }
        });
    }
};
