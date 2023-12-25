<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'sekolah_id' => 1,
            'kelas_nama' => 'KIkhwan 1',
            'keterangan' => 'kelas Ikhwan 1'
        ]);

        Kelas::create([
            'sekolah_id' => 1,
            'kelas_nama' => 'KIkhwan 2',
            'keterangan' => 'kelas Ikhwan 2'
        ]);

        Kelas::create([
            'sekolah_id' => 1,
            'kelas_nama' => 'KAkhwat 1',
            'keterangan' => 'kelas Akhwat 1'
        ]);

        Kelas::create([
            'sekolah_id' => 1,
            'kelas_nama' => 'KAkhwat 2',
            'keterangan' => 'kelas Akhwat 2'
        ]);
    }
}
