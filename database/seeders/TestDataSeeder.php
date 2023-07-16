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
            'name' => 'قهوه',
        ]);

        $hotDrinks = MenuCategory::create([
            'name' => 'نوشیدنی گرم',
        ]);

        $herbalDrinks = MenuCategory::create([
            'name' => 'نوشیدنی گیاهی',
        ]);

        $essencedWater = MenuCategory::create([
            'name' => 'نوشیدنی های اسانس دار',
        ]);

        $mocktails = MenuCategory::create([
            'name' => 'موکتل',
        ]);

        $milkshakes = MenuCategory::create([
            'name' => 'میلک شیک',
        ]);

        $snacks = MenuCategory::create([
            'name' => 'اسنک',
        ]);

        $cakes = MenuCategory::create([
            'name' => 'کیک',
        ]);
    }
}
