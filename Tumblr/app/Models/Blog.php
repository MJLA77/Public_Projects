<?php

//Author: Maria Lopez
//Date: 2018-11-08

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//this gives me database functionality
class Blog extends Model
{
    public $dates = ['date'];

    public function user()
    
    {   
        return $this->belongsTo('App\User');
    }

    public function likes()
    {

        return $this->hasMany('App\User');
    } 
   
}
