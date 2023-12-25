<?php

namespace Database\Seeders;

use App\Models\Iqro;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IqroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Iqro::create(
            ['nama_iqro' => 'Iqro 1'],
            ['nama_iqro' => 'Iqro 2'],
            ['nama_iqro' => 'Iqro 3'],
            ['nama_iqro' => 'Iqro 4'],
            ['nama_iqro' => 'Iqro 5'],
            ['nama_iqro' => 'Iqro 6']
        );
    }
}
