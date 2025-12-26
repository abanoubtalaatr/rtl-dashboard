<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'key' => 'enable_check_the_car_available',
            'value' => '1',
            'type' => 'boolean',
            'description' => 'التحقق من توفر السيارة قبل إنشاء الحجز الخارجي',
        ]);
    }
}
