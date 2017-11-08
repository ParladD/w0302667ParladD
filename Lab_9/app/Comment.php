<?php

namespace App;


class Comment extends Model
{
    //
    public function post(){

        return $this->belongsTo(Post::class);
    }
//for user
    public function user(){ //now u can get the user who commented with $comment->user

        return $this->belongsTo(User::class);
    }

}
