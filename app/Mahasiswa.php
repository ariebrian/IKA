<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = "profil_mhs";

    protected $fillable = [
        // 'no_identitas',
        // 'nama',
        'gender', 
        'mhs_tgl_lahir', 
        'mhs_alamat_rmh',
        // 'mhs_angkatan', 
        'mhs_peminatan', 
        'mhs_thn_lulus', 
        'mhs_skripsi',  
        // 'email', 
        'mhs_no_wa', 
        'mhs_linkedin'
    ];

    public $timestamps = false;
    protected $primaryKey = 'no_identitas';
    
    /**
     * Get all pekerjaan belongs to a user
     */
    public function pekerjaan()
    {
        return $this->belongsToMany('App\Pekerjaan');
    }
}
