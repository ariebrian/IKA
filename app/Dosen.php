<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $table = 'profil_dsn';

    protected $fillable = [
        // 'no_identitas', 
        // 'nama',
        'gender',
        'dsn_tgl_lahir', 
        'dsn_alamat_rmh', 
        // 'email', 
        'dsn_no_wa', 
        'dsn_linkedin'
    ];

    public $timestamps = false;
    protected $primaryKey = 'no_identitas';
}
