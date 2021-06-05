<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    protected $fillable = [

        'firstname',
        'lastname',
        'nationality',
        'date_of_birth',
    ];
}
