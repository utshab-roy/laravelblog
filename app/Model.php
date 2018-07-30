<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
//    protected $fillable = ['title', 'body']; //we accept all this field to be filled
    protected $guarded = []; //we are not accepting to fill this field
}
