<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $fillable= [
        'reply','forum_id','user_id'
    ];

    public function forum()
    {
        $this->belongsTo('App\Forum');
    }

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
