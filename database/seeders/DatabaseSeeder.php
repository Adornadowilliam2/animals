<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AnimalType;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        AnimalType::create([
            "animal_type_name" => "Mammal"
        ]);

        AnimalType::create([
            "animal_type_name" => "Reptile"
        ]);

        AnimalType::create([
            "animal_type_name" => "Bird"
        ]);

        AnimalType::create([
            "animal_type_name" => "Fish"
        ]);

        AnimalType::create([
            "animal_type_name" => "Amphibian"
        ]);
        AnimalType::create([
            "animal_type_name" => "Insect"
        ]);
    }
}
