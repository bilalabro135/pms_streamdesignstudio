<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            CitySeeder::class,
            Complaint_tagSeeder::class,
            Payment_methodSeeder::class,
            RatingSeeder::class,
            ReasonSeeder::class,
            StatusSeeder::class,
            ProvinceSeeder::class,
            AreaSeeder::class
        ]);
    }
}
