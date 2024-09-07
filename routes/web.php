<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HouseProjectController;
use App\Models\HouseProject;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/accueil', [HelloController::class, "index"]);

Route::post('/house-projects', [HouseProjectController::class, 'store']);

Route::get('/house-projects', function () {
    return response()->json(['message' => 'Liste des projets de maison', HouseProject::all()], 201);
});

Route::get('/house-projects/{id}', function ($id) {
    return HouseProject::find($id);
});
