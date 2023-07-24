<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;
    public function recettes() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Recette' , 'recette_ingredient' , 'ingredient_id' , 'recette_id');
    }
}
