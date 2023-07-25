<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use App\Models\Recette;
use Livewire\Component;

class IngredientComponent extends Component
{
    public string $name = '';
    public string $description = '';
    public   $ingredients = [];
    public bool $id_added = false;
    public Recette $recette;
    public function save()
    {
        $this->recette = Recette::create(
            [
                'name' => $this->name,
                'description' => $this->description
            ]
            );
            $this->is_added = true;
            session()->flash('success' , 'Recipe added with succes');
    }

    public function render()
    {
       $this->ingredients = Ingredient::all();
        return view(
            'livewire.ingredient-component'
        );
    }
}
