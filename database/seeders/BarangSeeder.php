<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodeBarang' => 'LP001',
                'namaBarang' => 'Lenovo Thinkpad',
                'harga' => '1500000',
                'deskripsi'=> 'Lenovo Thinkpad Keluaran ke 1',
                'satuan_id'=> 1

            ],
            [
                'kodeBarang' => 'HP001',
                'namaBarang' => 'Iphone XS',
                'harga' => '6000000',
                'deskripsi'=> 'Iphone X Kamera Super Amoled',
                'satuan_id'=> 2
            ],
            [
                'kodeBarang' => 'KP001',
                'namaBarang' => 'Komputer Lenovo GTX RTX',
                'harga' => '4000000',
                'deskripsi'=> 'Komputer Lenovo Spek Dewa',
                'satuan_id'=> 3
            ],
            [
                'kodeBarang' => 'SD001',
                'namaBarang' => 'Keyboard Logitech',
                'harga' => '500000',
                'deskripsi'=> 'Keyboard Logitech Gaming RGB',
                'satuan_id'=> 4
            ]
        ]);
    }
}
