<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
//    public static function incomplete(){
//        //static keyword used because we are in the Task class
//        return static::where('completed', 0)->get();
//    }

    public function scopeIncomplete($query){// this allows us to do Task::incomplete()
        /**
         * this is the query scope using the scope prefix at the beginning of the the function name
         * this is helpful for the method chaining.
         * For example: App\Task::incomplete()->where('id', '>=', '2')->get();
         */
        return $query->where('completed', 0);
    }
}
