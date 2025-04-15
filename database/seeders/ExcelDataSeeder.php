<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelDataImport;

class ExcelDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->truncate(); // Clears all records in the 'posts' table

        $filePath = database_path('data/postsData.xlsx');

        Excel::import(new ExcelDataImport, $filePath);

        $this->command->info('Excel data imported successfully');
    }
}
