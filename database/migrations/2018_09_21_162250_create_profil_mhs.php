<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilMhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_mhs', function (Blueprint $table) {
            $table->increments('id'); // Foreign Key (Has One --- belong to User)
            $table->string('no_identitas'); // Foreign Key (Has One --- belong to User)
            $table->string('nama'); // Foreign Key (Has One --- belong to User)
            $table->date('tgl_lahir');
            $table->string('gender');
            $table->string('alamat_rmh');
            $table->string('angkatan', 4);
            $table->string('peminatan')->nullable();
            $table->string('thn_lulus', 4)->nullable();
            $table->text('skripsi')->nullable();
            $table->string('email'); // Foreign Key (Has One --- belong to User)
            $table->string('no_wa')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('profil_mhs');
    }
}
