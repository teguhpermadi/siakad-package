<?php

namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Income::create(['name' => 'kurang dari 1.000.0000']);
        Income::create(['name' => '1.000.000 - 2.000.0000']);
        Income::create(['name' => '2.000.000 - 3.000.0000']);
        Income::create(['name' => '3.000.000 - 4.000.0000']);
        Income::create(['name' => '4.000.000 - 5.000.0000']);
        Income::create(['name' => 'lebih dari 5.000.000']);
        Income::create(['name' => 'tidak berpenghasilan']);
    }
}
