<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Feedback extends Model
{
    protected $table='feedbacks';

    public function User(){
      return $this->belongsTo('App\User');
    }
}
