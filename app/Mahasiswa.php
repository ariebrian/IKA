<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = "profil_mhs";

    protected $fillable = 
    ['id_npm', 'nama', 'bd', 'alamat_h', 'angkatan', 'peminatan', 'thn_lulus', 'jdl_skripsi', 'email', 'no_wa', 'link_edin'];

    public $timestamps = false;
    protected $primaryKey = 'id_npm';
}
