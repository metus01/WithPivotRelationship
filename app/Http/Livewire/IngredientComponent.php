<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use Livewire\Component;

class IngredientComponent extends Component
{
    public  array $selection = [];
    public  array  $quantities = [];
    public function render()
    {
        $ingredients = Ingredient::all();
        return view(
            'livewire.ingredient-component',
            [
                'ingredients' => $ingredients
            ]
        );
    }
}
