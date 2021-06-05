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

    
    public function cars(){ //creiamo le relazioni: da pilot a car relazione(molti a molti)

        return $this -> belongesToMany(Car::class);
}
