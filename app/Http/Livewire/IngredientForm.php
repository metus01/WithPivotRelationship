<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use App\Models\Recette;
use Livewire\Component;

class IngredientForm extends Component
{
    public  Ingredient $ingredient;
    public string $quantity = '';
    public Recette $recette;
    public function save()
    {
       $this->recette->ingredients()->attach([
        $this->ingredient->id => [
            "quantite" => $this->quantity
        ]
        ]);
        $this->emit('finish');
    }
    public function render()
    {
        return view('livewire.ingredient-form');
    }
}
