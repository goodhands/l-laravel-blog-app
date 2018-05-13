<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function scopeIncomplete($query){
        /**
         * this function will help us fetch
         * our incomplete tasks easily
         * UPDATE: we are making this into a query
         * scope so it could help us achieve two things
         * which a static function wouldn't be able to
         */

         return $query->where('completed', 0);
    }
}
