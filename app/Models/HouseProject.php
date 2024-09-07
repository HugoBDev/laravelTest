<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class HouseProject extends Model
{

    ### Le model permet d'intéragir avec ma table via Eloquent 
    use HasFactory;
    //Nom de la table dans la DB 
    protected $table = 'house-projects';

    // Les colonnes que l'on peut remplir via un formulaire ou API
    protected $fillable = [
        'title',
        'description',
        'adress',
        'district',
        'city',
        'zipcode',
    ];
}
