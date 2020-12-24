<?php

namespace Database\Seeders;

use App\Models\PromotionSlide;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromotionSlide::create([
            'name' => 'ADMIN',
            'description' => 'testing by admin',
            'image' => 'images/promotion/a2.jpg',
            'location' => 'A',
        ]);
        PromotionSlide::create([
            'name' => 'ADMIN',
            'description' => 'testing by admin',
            'image' => 'images/promotion/b2.jpeg',
            'location' => 'A',
        ]);
        PromotionSlide::create([
            'name' => 'ADMIN',
            'description' => 'testing by admin',
            'image' => 'images/promotion/c2.jpeg',
            'location' => 'B',
        ]);
        PromotionSlide::create([
            'name' => 'ADMIN',
            'description' => 'testing by admin',
            'image' => 'images/promotion/d2.jpeg',
            'location' => 'B',
        ]);
    }
}
