<?php

namespace Database\Seeders;

use App\Models\Airlines;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $csvFilePath = database_path('data/airlines.csv');
        $iconSourceFolder = database_path('data/airlines_icons');
        $defaultLogoPath = $iconSourceFolder . '/00_nologo.png';
        $destinationFolder = public_path('assets/airlines_logo');

        // Check if the CSV file exists
        if (!File::exists($csvFilePath)) {
            $this->command->error("CSV file not found at: $csvFilePath");
            return;
        }

        // Ensure destination directory exists
        if (!File::exists($destinationFolder)) {
            File::makeDirectory($destinationFolder, 0755, true);
        }

        // Parse the CSV
        $rows = array_map('str_getcsv', file($csvFilePath));
        $headers = array_map('trim', array_shift($rows));
        $headers[0] = ltrim($headers[0], "\xEF\xBB\xBF"); // remove BOM if any

        foreach ($rows as $row) {
            $data = array_combine($headers, $row);

            $iata = isset($data['iata_code']) ? strtoupper(trim($data['iata_code'])) : null;
            $name = isset($data['name']) ? trim($data['name']) : 'Unknown Airline';

            if (!$iata || preg_match('/[^A-Z0-9]/', $iata)) {
                $this->command->warn("Skipping invalid IATA code: " . ($iata ?? 'NULL'));
                continue;
            }

            // Determine logo source and destination
            $sourceLogoPath = $iconSourceFolder . "/{$iata}.png";
            $logoToUse = File::exists($sourceLogoPath) ? $sourceLogoPath : $defaultLogoPath;

            $destinationLogoPath = $destinationFolder . "/{$iata}.png";

            // Copy logo to public folder if not exists
            if (!File::exists($destinationLogoPath)) {
                File::copy($logoToUse, $destinationLogoPath);
            }

            // Save only the filename
            $logoFileName = "{$iata}.png";

            Airlines::updateOrCreate(
                ['iata_code' => $iata],
                ['name' => $name, 'logo_url' => $logoFileName]
            );
        }

        $this->command->info('Airlines seeded successfully.');
    }
}
