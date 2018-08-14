<?php

namespace App;

class Post extends Model
{

    public function comments(){

        return $this->hasMany(Comment::class);

    }

//    protected $fillable = ['title', 'body']; //we accept all this field to be filled
//    protected $guarded = []; //we are not accepting to fill this field
}
