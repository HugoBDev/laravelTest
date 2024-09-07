<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HouseProject;

class HouseProjectController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données reçues
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'adress' => 'required|string',
            'district' => 'required|string',
            'city' => 'required|string',
            'zipcode' => 'required|integer',
        ]);

        // Création du projet de maison dans la base de données
        $houseProject = HouseProject::create($validatedData);

        // Retourner une réponse (JSON) avec le projet créé
        return response()->json([
            'message' => 'House project created successfully!',
            'houseProject' => $houseProject
        ], 201);
    }
}
