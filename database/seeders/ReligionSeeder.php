<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::create(['name' => 'ISLAM']);
        Religion::create(['name' => 'KRISTEN']);
        Religion::create(['name' => 'KATHOLIK']);
        Religion::create(['name' => 'HINDU']);
        Religion::create(['name' => 'BUDHA']);
        Religion::create(['name' => 'KONGHUCU']);
    }
}
