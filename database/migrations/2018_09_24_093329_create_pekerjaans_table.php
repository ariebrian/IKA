<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaan_mhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tempat_kerja');
            $table->string('alamat_kerja');
            $table->timestamps();
        });
        Schema::create('mahasiswa_pekerjaan', function (Blueprint $table) {
            $table->integer('mahasiswa_id')->unsigned()->index();
            $table->foreign('mahasiswa_id')->references('id')->on('profil_mhs')->onDelete('cascade');

            $table->integer('pekerjaan_id')->unsigned()->index();
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan_mhs')->onDelete('cascade');

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
        Schema::dropIfExists('pekerjaan_mhs');
        Schema::dropIfExists('mahasiswa_pekerjaan');
    }
}
