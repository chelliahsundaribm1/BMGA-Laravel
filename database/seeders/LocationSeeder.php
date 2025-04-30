<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


     public function run(): void
     {
         // Load the JSON file
         $json = File::get(database_path('data/locations.json'));
         $locations = json_decode($json, true);
 
         // Break data into chunks (e.g., 500 records per chunk)
         $chunks = array_chunk($locations, 500); // Adjust the chunk size as needed
 
         // Insert data in chunks
         foreach ($chunks as $chunk) {
             DB::table('locations')->insert($chunk);
         }
     }
}
