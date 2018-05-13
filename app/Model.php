<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    /** $fillable whitelists fields to be submitted */
    // protected $fillable = ['title', 'body'];

    /** $guarded whitelists fields to be rejected */
    protected $guarded = [];
}
