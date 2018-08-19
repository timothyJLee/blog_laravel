<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use User;

class Post extends Model {

   protected $table = 'posts';

   protected $fillable = array('title','body', 'user_id');

   public $timestamps = true;



   public function User(){

      return $this->belongsTo('User');

   }

   public function comments()   {
  		return $this->hasMany('App\Comment');
   }


}


