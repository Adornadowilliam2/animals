<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    //
    public function animals(){
        return $this->hasMany(Animal::class, 'animal_type_id');
    }
}
