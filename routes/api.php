<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/animals", [App\Http\Controllers\AnimalController::class, "store"]);
Route::get("/animals", [App\Http\Controllers\AnimalController::class, "index"]);
Route::patch("/animals/{id}", [App\Http\Controllers\AnimalController::class, "update"]);

Route::get("/animal-types", [App\Http\Controllers\AnimalTypeController::class, "index"]);