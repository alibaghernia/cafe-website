<?php

namespace Database\Seeders;

use App\Models\MenuCategory;
use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $coffees = MenuCategory::create([
            'name' => 'Coffees',
        ]);

        $hotDrinks = MenuCategory::create([
            'name' => 'Hot drinks',
        ]);

        $herbalDrinks = MenuCategory::create([
            'name' => 'Herbal drinks',
        ]);

        $essencedWater = MenuCategory::create([
            'name' => 'Essenced water',
        ]);

        $mocktails = MenuCategory::create([
            'name' => 'Mocktails',
        ]);

        $milkshakes = MenuCategory::create([
            'name' => 'Milkshakes',
        ]);

        $snacks = MenuCategory::create([
            'name' => 'Snacks',
        ]);

        $cakes = MenuCategory::create([
            'name' => 'Cakes',
        ]);
    }
}
