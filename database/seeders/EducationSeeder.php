<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create(['name' => 'S1']);
        Education::create(['name' => 'S2']);
        Education::create(['name' => 'S3']);
        Education::create(['name' => 'SMA SEDERAJAT']);
        Education::create(['name' => 'SMP SEDERAJAT']);
        Education::create(['name' => 'SD SEDERAJAT']);
    }
}
