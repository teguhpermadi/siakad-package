<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Occupation::create(['name' => 'PNS']);
        Occupation::create(['name' => 'TNI']);
        Occupation::create(['name' => 'POLRI']);
        Occupation::create(['name' => 'KARYAWAN SWASTA']);
        Occupation::create(['name' => 'NELAYAN']);
        Occupation::create(['name' => 'PETANI']);
        Occupation::create(['name' => 'PETERNAK']);
        Occupation::create(['name' => 'WIRASWASTA']);
        Occupation::create(['name' => 'BURUH']);
        Occupation::create(['name' => 'PENSIUNAN']);
        Occupation::create(['name' => 'LAIN-LAIN']);
    }
}
