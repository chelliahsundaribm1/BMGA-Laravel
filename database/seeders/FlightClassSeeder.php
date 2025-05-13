<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flightClasses = [
            ['name' => 'ALL', 'baggage_info' => null, 'extra_charge' => null],
            ['name' => 'ECONOMY', 'baggage_info' => null, 'extra_charge' => null],
            ['name' => 'PREMIUM ECONOMY', 'baggage_info' => null, 'extra_charge' => null],
            ['name' => 'BUSINESS', 'baggage_info' => null, 'extra_charge' => null],
            ['name' => 'PREMIUM BUSINESS', 'baggage_info' => null, 'extra_charge' => null],
            ['name' => 'FIRST', 'baggage_info' => null, 'extra_charge' => null],
        ];

        DB::table('flight_classes')->insert($flightClasses);
    }
}
