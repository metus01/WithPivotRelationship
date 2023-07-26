<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use App\Models\Recette;
use App\Models\RecetteIngredient;
use Livewire\Component;

class IngredientForm extends Component
{
    public RecetteIngredient $ri;
    protected $rules = [
        'ri.quantity' => 'required|min:4'
    ];

    public function save()
    {
        dd($this->ri);
    }
    public function render()
    {
        return view('livewire.ingredient-form');
    }
}
