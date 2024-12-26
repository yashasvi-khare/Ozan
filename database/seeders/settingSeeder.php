<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class settingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'banner_img', 'value'=> null ],
            ['name' => 'price_visibility', 'value'=> null ],
            ['name' => 'hot_deal_img', 'value'=> null ],
            ['name' => 'hot_deal_text', 'value'=> null ],
        ];

        foreach($data as $row)
        {
            Setting::create([
                'name' => $row['name'],
            ]);  
        }
    }
}
