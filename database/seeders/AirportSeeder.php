<?php

namespace Database\Seeders;

use App\Models\Airport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AirportSeeder extends Seeder
{
    public function run(): void
    {
        $csvFilePath = database_path('data/airport.csv');

        if (!File::exists($csvFilePath)) {
            $this->command->error("CSV file not found at: $csvFilePath");
            return;
        }

        $rows = array_map('str_getcsv', file($csvFilePath));
        $headers = array_map('trim', array_shift($rows));
        $headers[0] = ltrim($headers[0], "\xEF\xBB\xBF");

        foreach ($rows as $row) {
            $data = array_combine($headers, $row);

            Airport::updateOrCreate(
                ['airport_code' => strtoupper(trim($data['airport_code']))],
                [
                    'airport_name' => trim($data['airport_name']),
                    'city_code' => strtoupper(trim($data['city_code'])),
                    'city_name' => trim($data['city_name']),
                    'country_name' => trim($data['country_name']),
                    'country_code' => null,
                    'latitude' => null,
                    'longitude' => null,
                ]
            );
        }

        $this->command->info('Airports seeded successfully.');
    }
}
