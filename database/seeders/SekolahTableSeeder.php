<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::create([
            'sekolah_nama' => 'RBQ Annas bin Malik',
            'keterangan' => 'Rumah Baca Quran Annas bin Malik, cilebut'
        ]);
    }
}
