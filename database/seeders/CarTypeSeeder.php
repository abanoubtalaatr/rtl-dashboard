<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carTypes = [
            ['name' => 'سيدان', 'description' => 'سيارة سيدان عادية'],
            ['name' => 'ميني باص', 'description' => 'ميني باص 14 راكب'],
            ['name' => 'باص كبير', 'description' => 'باص 25 راكب أو أكثر'],
            ['name' => 'كوستر', 'description' => 'كوستر 26 راكب'],
            ['name' => 'فان', 'description' => 'سيارة فان'],
            ['name' => 'SUV', 'description' => 'سيارة دفع رباعي'],
        ];

        foreach ($carTypes as $type) {
            CarType::create($type);
        }
    }
}
