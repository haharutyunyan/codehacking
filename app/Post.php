<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public  function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }


}
