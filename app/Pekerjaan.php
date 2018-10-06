<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    //
    protected $table = 'pekerjaan_mhs';

    protected $fillable = [
        'tempat_kerja','alamat_kerja','mahasiswa_id','pekerjaan_id'
    ];

    // protected $primaryKey = 'id';

    public function mahasiswa()
    {
        return $this->belongsToMany('App\Mahasiswa');
    }
}
