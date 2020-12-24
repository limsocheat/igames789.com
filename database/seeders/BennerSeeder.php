<?php

namespace Database\Seeders;

use App\Models\Benner;
use Illuminate\Database\Seeder;

class BennerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Benner::create([
            'name' => 'testing',
            'description' => 'testing by admin',
            'location' => 'A',
            'image' => 'images/banner/1.jpg',
        ]);
        Benner::create([
            'name' => 'testing',
            'description' => 'testing by admin',
            'location' => 'A',
            'image' => 'images/banner/2.jpeg',
        ]);
        Benner::create([
            'name' => 'testing',
            'description' => 'testing by admin',
            'location' => 'A',
            'image' => 'images/banner/3.jpeg',
        ]);
        Benner::create([
            'name' => 'testing',
            'description' => 'testing by admin',
            'location' => 'B',
            'image' => 'images/banner/4.jpeg',
        ]);
        Benner::create([
            'name' => 'testing',
            'description' => 'testing by admin',
            'location' => 'B',
            'image' => 'images/banner/5.jpeg',
        ]);
    }
}
