<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    protected $table = 'adventures';

    public function votes(){
        return $this->hasMany('App\Vote');
    }

    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
