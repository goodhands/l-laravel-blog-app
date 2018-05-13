<?php

namespace App;

class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }


    public function user(){
        return $this->hasMany(User::class);
    }


    public function addComment($body){

        // Comment::create([
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);
        /** A better way */

        $this->comments()->create(compact('body'));

    }
}
