<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            WhychooseusSeeder::class,
            SettingSeeder::class,
            TestimonialSeeder::class,
            SliderSeeder::class,
            LocationSeeder::class,
            ProjectSeeder::class,
            AboutSeeder::class,
            FaqSeeder::class,
            HomeImageSeeder::class,
            DynamicPagesSeeder::class,
            HomesliderSeeder::class,
        ]);
    }
}
