<?php

namespace Database\Seeders;

use App\Models\Airlines;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $csvFilePath = database_path('data/airlines.csv');
        $iconFolder = 'database/data/airlines_icons'; // Path to your icons folder
        $defaultLogoPath = "$iconFolder/00_nologo.png"; // Path to the default logo

        // Check if the CSV file exists
        if (!File::exists($csvFilePath)) {
            $this->command->error("CSV file not found at: $csvFilePath");
            return;
        }

        // Read the CSV file and parse rows
        $rows = array_map('str_getcsv', file($csvFilePath));

        // Remove BOM if present
        $headers = array_map('trim', array_shift($rows)); // Pop headers
        $headers[0] = ltrim($headers[0], "\xEF\xBB\xBF"); // Remove BOM from first column header

        foreach ($rows as $row) {
            // Combine row with headers
            $data = array_combine($headers, $row);

            // Safely retrieve 'iata_code' and 'name' with fallback if they are not present
            $iata = isset($data['iata_code']) ? strtoupper(trim($data['iata_code'])) : null;
            $name = isset($data['name']) ? trim($data['name']) : 'Unknown Airline';

            // Check if the airline icon exists
            $logoDiskPath = "$iconFolder/{$iata}.png";

            // Use the default logo if the specific logo does not exist
            if (File::exists($logoDiskPath)) {
                $logoToUse = $logoDiskPath;
            } else {
                $logoToUse = $defaultLogoPath;
            }

            // Set the destination path for storing the logo in 'public/assets/airlines_logo'
            $destination = "public/assets/airlines_logo/{$iata}.png";

            // Move to public if icon exists and not yet linked
            if (!Storage::exists($destination)) {
                Storage::put($destination, File::get($logoToUse));
            }

            // Get the URL of the stored logo
            $logoUrl = Storage::url("assets/airlines_logo/{$iata}.png");

            // Update or create airline record
            Airlines::updateOrCreate(
                ['iata_code' => $iata],
                ['name' => $name, 'logo_url' => $logoUrl]
            );
        }

        $this->command->info('Airlines seeded successfully.');
    }
}
