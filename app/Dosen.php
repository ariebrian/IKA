<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $table = 'profil_dsn';

    protected $fillable = [
        'id_nip', 'nama', 'bd', 'alamat_h', 'email', 'no_wa', 'link_edin'
    ];

    public $timestamps = false;
    protected $primaryKey = 'id_nip';
}
