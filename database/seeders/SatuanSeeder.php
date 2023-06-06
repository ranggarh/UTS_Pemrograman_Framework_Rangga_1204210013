<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kodeSatuan' => 'LPTP',
                'namaSatuan' => 'Laptop'
            ],
            [
                'kodeSatuan' => 'HNDP',
                'namaSatuan' => 'Handphone'
            ],
            [
                'kodeSatuan' => 'KOMP',
                'namaSatuan' => 'Komputer'
            ],
            [
                'kodeSatuan' => 'SUPP',
                'namaSatuan' => 'Support Device'
            ]
        ]);
    }
}
