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
            $table->date('mhs_tgl_lahir');
            $table->string('mhs_alamat_rmh');
            $table->string('mhs_angkatan', 4);
            $table->string('mhs_peminatan')->nullable();
            $table->string('mhs_thn_lulus', 4)->nullable();
            $table->text('mhs_skripsi')->nullable();
            $table->string('email'); // Foreign Key (Has One --- belong to User)
            $table->string('mhs_no_wa')->nullable();
            $table->string('mhs_linkedin')->nullable();
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
