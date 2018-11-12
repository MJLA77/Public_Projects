<?php

//Author: Maria Lopez
//Date: 2018-11-08

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'user_profiles';
    public $dates = ['date'];

    public $primaryKey = 'user_id';
    public $timestamps = false;
}

