<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = [

        'name',
        'model',
        'kW',
        'brand_id',
    ];

    
    public function pilots(){ //creiamo le relazioni: da pilot a car relazione(molti a molti)

        return $this -> belongsToMany(Pilot::class);
    }

    
    public function brand(){ //creiamo le relazioni: da pilot a brand relazione(uno a molti)
        
        return $this -> belongsTo(Brand::class);

    }
}
