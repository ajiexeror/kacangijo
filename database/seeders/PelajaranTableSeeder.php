<?php

namespace Database\Seeders;

use App\Models\Pelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelajaran::created(
            ['nama_pelajaran' => 'iqro'],
            ['nama_pelajaran' => 'alquran'],
            ['nama_pelajaran' => 'murojaah baru'],
            ['nama_pelajaran' => 'murojaah'],
            ['nama_pelajaran' => 'aqidah']
        );
    }
}
