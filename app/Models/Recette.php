<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recette extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'description'
    ];
    public function ingredients() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Recette' , 'recette_ingredient' , 'ingredient_id' , 'recette_id')->withPivot('quantity');
    }
}
