<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    /**
     * protect the table
     */

     protected $table = 'animals';

     protected $fillable = [
        "name",
        "animal_type_id"
     ];

     public function animalType(){
        return $this->belongsTo(AnimalType::class, 'animal_type_id');
     }
}
