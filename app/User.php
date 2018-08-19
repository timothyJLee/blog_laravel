<?php

namespace app;
use Post;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
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

public function Post()
    {
        //return $this->hasMany('app\Post', 'user_id');
        return $this->hasMany('app\Post');
    }

   public function comments()   {
        return $this->hasMany('App\Comment');
   }


}
