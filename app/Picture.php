<?php

namespace App;

use App\Adventure;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';
    public function adventure()
    {
    	return $this->belongsTo('Adventure');
    }
}
