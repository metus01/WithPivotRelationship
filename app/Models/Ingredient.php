<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name'
    ];
    public function recettes() : BelongsToMany
    {
        return $this->belongsToMany(Recette::class);
    }
}
