<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recette extends Model
{
    use HasFactory;
    public function ingredients() : BelongsToMany
    {
        return $this->belongsToMany(Recette::class);
    }
}
