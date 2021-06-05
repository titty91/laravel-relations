<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [

        'name',
        'nationality',
    ];

    public function cars(){ //creiamo le relazioni: da brand a cars relazione( a molti)

        return $this -> hasMany(Car::class);
    }

}
