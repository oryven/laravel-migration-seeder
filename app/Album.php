<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [

        'title',
        'date_release',
        'tracks',    
        'name_artist',
        'genre',
        'description'
    ];
    
}
