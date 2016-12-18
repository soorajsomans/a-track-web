<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Result extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }
}
