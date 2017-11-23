<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $fillable = [
        'file'
    ];

   public function post(){

       return $this->hasOne('App\Post');
   }
}


