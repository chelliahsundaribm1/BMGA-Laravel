<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);
        $this->call([
            BookingTypeSeeder::class,
        ]);
        $this->call([
            UserSeeder::class,
        ]);
        // $this->call([
        //     LocationSeeder::class,
        // ]);
        $this->call([
            CountrySeeder::class,
        ]);
        $this->call([
            StateSeeder::class,
        ]);
        $this->call([
            CitySeeder::class,
        ]);
        $this->call([
            AirlineSeeder::class,
        ]);
        $this->call([
            AirportSeeder::class,
        ]);

    }
}
