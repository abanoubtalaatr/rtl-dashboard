<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['name' => 'فندق ماريوت', 'type' => 'hotel', 'address' => 'شارع الكورنيش'],
            ['name' => 'فندق هيلتون', 'type' => 'hotel', 'address' => 'وسط البلد'],
            ['name' => 'فندق ريتز كارلتون', 'type' => 'hotel', 'address' => 'المنطقة السياحية'],
            ['name' => 'الأهرامات', 'type' => 'landmark', 'address' => 'الجيزة'],
            ['name' => 'المتحف المصري', 'type' => 'landmark', 'address' => 'ميدان التحرير'],
            ['name' => 'مطار القاهرة الدولي', 'type' => 'airport', 'address' => 'مصر الجديدة'],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
