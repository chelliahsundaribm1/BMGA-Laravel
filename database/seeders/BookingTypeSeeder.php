<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Flight', 'slug' => Str::slug('Flight')],
            ['name' => 'Hotel', 'slug' => Str::slug('Hotel')],
            ['name' => 'Cars', 'slug' => Str::slug('Cars')],
            ['name' => 'Attractions', 'slug' => Str::slug('Attractions')],
        ];
    
        DB::table('booking_types')->insert($types);
    }
}
