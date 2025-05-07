<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/cities.json'));
        $citiesArray = json_decode($json, true);
    
        if (!isset($citiesArray['cities'])) {
            throw new \Exception("Invalid JSON structure: Missing 'cities' key.");
        }
    
        $cities = $citiesArray['cities'];
    
        foreach ($cities as $city) {
            if (!State::where('id', $city['state_id'])->exists()) {
                dump("Skipping city: {$city['name']} - state_id {$city['state_id']} does not exist.");
                continue;
            }
    
            City::create([
                'id' => $city['id'],
                'name' => $city['name'],
                'state_id' => (int) $city['state_id'],
            ]);
        }
    }
}
