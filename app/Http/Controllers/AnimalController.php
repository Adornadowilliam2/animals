<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(){
        $animals = Animal::with('animalType')->get();
        return response()->json([
            "ok" => true,
            "message" => "Retrieve successfully",
            "data" => $animals
        ], 200);
     }

     public function store(Request $request){
        $validator = validator($request->all(), [
            "name" => "required",
            "animal_type_id" => "required"
        ]);

        if($validator->fails()){
            return response()->json([
                "ok" => false,
                "message" => $validator->errors()
            ], 400);
        }

        $animal = Animal::create($validator->validated());

        return response()->json([
            "ok" => true,
            "message" => "Create successfully",
            "data" => $animal
        ], 200);
     }

     public function update(Request $request, Animal $animal){
        $validator = validator($request->all(), [
            "name" => "required",
            "animal_type_id" => "required"
        ]);

        if($validator->fails()){
            return response()->json([
                "ok" => false,
                "message" => $validator->errors()
            ], 400);
        }

        $animal->update($validator->validated());

        return response()->json([
            "ok" => true,
            "message" => "Update successfully",
            "data" => $animal
        ], 200);
     }
}
