<?php

namespace Database\Seeders;

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
        // Path to the SQL file
        $sqlFilePath = database_path('data/locations.sql');

        // Check if the file exists
        if (File::exists($sqlFilePath)) {
            // Get the contents of the SQL file
            $sql = File::get($sqlFilePath);

            // Split the SQL into smaller chunks based on the INSERT INTO statements
            $chunks = explode("),", $sql);

            // Process each chunk and insert them one by one
            foreach ($chunks as $chunk) {
                // Clean the chunk by adding the closing parenthesis and semicolon
                $chunk .= ')';

                // Execute the chunk
                DB::unprepared($chunk);
            }

            $this->command->info('Locations seeded successfully from SQL file.');
        } else {
            $this->command->error('SQL file not found: ' . $sqlFilePath);
        }
    }
}
