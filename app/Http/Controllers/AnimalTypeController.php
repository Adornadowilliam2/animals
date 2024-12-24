<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimalType;
class AnimalTypeController extends Controller
{
    //
    public function index(){
        return response()->json([
            "ok" => true,
            "message" => "Retrieve successfully",
            "data" => AnimalType::all()
        ], 200);
    }
}
