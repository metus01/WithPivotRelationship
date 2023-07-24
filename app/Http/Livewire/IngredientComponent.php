<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use App\Models\Recette;
use Livewire\Component;

class IngredientComponent extends Component
{
    public string $name;
    public string $description;
    public array $ingredientSelected = [];
    public function render()
    {

        $ingredients = Ingredient::all();
        return view('livewire.ingredient-component' ,
    [
        'ingredients' => $ingredients
     ]);
    }
    public function addRecipe()
    {
        try {
            Recette::create(
                [
                    'name' => $this->name,
                    'description' => $this->description
                ]
            );
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function done()
    {
        dd($this->ingredientSelected);
    }
}
