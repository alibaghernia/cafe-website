<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\HomePage;
use App\Models\User;
use App\Models\Weekday;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => '$2y$10$eQ9qkgSWN5Hi4eObCTdGJeOz1B4aZnj/WPla25xfXT9PpCd5Zw.dC', //password
        ]);

        $SATURDAY = Weekday::create(['name' => Weekday::SATURDAY]);
        $SUNDAY = Weekday::create(['name' => Weekday::SUNDAY]);
        $MONDAY = Weekday::create(['name' => Weekday::MONDAY]);
        $TUESDAY = Weekday::create(['name' => Weekday::TUESDAY]);
        $WEDNESDAY = Weekday::create(['name' => Weekday::WEDNESDAY]);
        $THURSDAY = Weekday::create(['name' => Weekday::THURSDAY]);
        $FRIDAY = Weekday::create(['name' => Weekday::FRIDAY]);


        Event::create([
            'name' => 'جلسه روانشناسی',
            'start' => '19:00',
            'weekday_id' => $SUNDAY->id,
        ]);

        Event::create([
            'name' => 'بازی مافیا',
            'start' => '19:00',
            'weekday_id' => $MONDAY->id,
        ]);

        Event::create([
            'name' => 'فینال فوتبال دستی',
            'start' => '19:00',
            'weekday_id' => $TUESDAY->id,
        ]);

        Event::create([
            'name' => 'مکالمه انگلیسی',
            'start' => '10:30',
            'weekday_id' => $THURSDAY->id,
        ]);

        Event::create([
            'name' => 'بازی مافیا',
            'start' => '18:30',
            'weekday_id' => $FRIDAY->id,
        ]);

        HomePage::create(['content' => 'test']);

        $this->call([
            TestDataSeeder::class,
        ]);
    }
}
