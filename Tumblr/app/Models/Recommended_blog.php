<?php
//Author: Maria Lopez
//Date: 2018-11-08
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recommended_blog extends Model
{
    // public $dates = ['date'];
    public function user()
    {
        return $this->belongsTo('App\User_profiles');
    }

    public $timestamps = false;
}
