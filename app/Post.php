<?php

namespace App;

class Post extends Model
{
//    protected $fillable = ['title', 'body']; //we accept all this field to be filled
    protected $guarded = []; //we are not accepting to fill this field
}
