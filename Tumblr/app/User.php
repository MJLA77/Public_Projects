<?php
//Author: Maria Lopez
//Date: 2018-11-08

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function profile(){

        // i can also override the joined table name with a second arguement
    
        return $this->hasOne('App\Models\Profile');
    } 

    public function blogs()

    {
        return $this->HasMany('App\Models\Blog');
}


    function likedBlogs(){

    // i can also override the joined table name with a second arguement

        return $this->belongsToMany('App\Models\Blog');
    }    

}
