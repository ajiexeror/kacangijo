<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencapaians', function (Blueprint $table) {
            $table->id('pencapaian_id');
            $table->integer('siswa_id');
            $table->integer('guru_id');
            $table->integer('pelajaran_id');
            $table->string('halaman_ayat');
            $table->integer('start');
            $table->integer('end');
            $table->string('l_u', 1);
            $table->string('catatan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pencapaians');
    }
};
