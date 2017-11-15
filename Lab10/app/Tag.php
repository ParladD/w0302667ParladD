<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function posts(){

        //any post may have many tags

        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

}
