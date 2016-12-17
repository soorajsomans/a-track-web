<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table='exams';

        protected $fillable =['subject','chapter','question','opt1','opt2','opt3','opt4','explanation','ans'];
}
