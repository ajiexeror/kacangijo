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
            'nama_sekolah' => 'RBQ Annas bin Malik',
            'keterangan' => 'Rumah Baca Quran Annas bin Malik, cilebut'
        ]);
    }
}
