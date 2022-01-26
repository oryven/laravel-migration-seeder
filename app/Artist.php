<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [

        'name',
        'surname', 
        'date_of_birth',
        'biography',
        'genre',
        'website'

    ];
}
