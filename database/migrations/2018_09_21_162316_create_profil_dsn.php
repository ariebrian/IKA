<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilDsn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_dsn', function (Blueprint $table) {
            $table->increments('id'); // Foreign Key (Has One --- belong to User)
            $table->string('no_identitas'); // Foreign Key (Has One --- belong to User)
            $table->string('nama'); // Foreign Key (Has One --- belong to User)
            $table->date('dsn_tgl_lahir');
            $table->string('dsn_alamat_rmh');
            $table->string('email'); // Foreign Key (Has One --- belong to User)
            $table->string('dsn_no_wa');
            $table->string('dsn_linkedin');
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
        Schema::dropIfExists('profil_dsn');
    }
}
