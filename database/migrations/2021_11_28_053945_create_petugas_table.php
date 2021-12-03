<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id('id_petugas', 11);
            $table->char('nip', 8)->unique();
            $table->string('password');
            $table->string('nama_petugas', 35);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->char('no_telpon', 13);
            $table->enum('level', ['admin', 'petugas'])->default('petugas');
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
        Schema::dropIfExists('petugas');
    }
}
