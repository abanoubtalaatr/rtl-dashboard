<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('car_expenses', function (Blueprint $table) {
            // حذف العمود القديم cost إذا كان موجوداً
            if (Schema::hasColumn('car_expenses', 'cost')) {
                $table->dropColumn('cost');
            }

            // إضافة عمود total_cost محفوظ (اختياري لكن مفيد جدًا للـ filtering والـ sorting)
            $table->decimal('total_cost', 12, 2)->default(0)->after('description');

            // جعل items يدعم NULL (للحالات النادرة)
            $table->json('items')->nullable()->change();
        });

        // تحديث كل الصفوف القديمة لملء total_cost
        DB::statement("
            UPDATE car_expenses 
            SET total_cost = COALESCE((
                SELECT SUM(CAST(json_unquote(json_extract(items, CONCAT('$[', n.n, '].cost'))) AS DECIMAL(12,2)))
                FROM (SELECT 0 AS n UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) n
                WHERE n.n < json_length(items)
            ), 0)
            WHERE items IS NOT NULL
        ");
    }

    public function down(): void
    {
        Schema::table('car_expenses', function (Blueprint $table) {
            $table->decimal('cost', 10, 2)->after('description');
            $table->dropColumn('total_cost');
            $table->json('items')->nullable(false)->change();
        });
    }
};
