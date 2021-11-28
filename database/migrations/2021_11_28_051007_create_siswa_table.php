<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa', 11);
            $table->char('nis', 8)->unique();
            $table->string('username', 25)->unique();
            $table->string('password', 32);
            $table->string('nama', 35);
            $table->foreignId('id_kelas', 11);
            $table->text('alamat')->nullable();
            $table->string('no_telp', 13)->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->foreignId('id_spp', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
