<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetteIngredient extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'recette_id',
        'ingredient_id',
        'quantity'
    ];
}
