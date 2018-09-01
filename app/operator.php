<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operator extends Model
{
    //
    protected $table = 'operators';

    protected $fillable = [
        'email', 
    ];
}
