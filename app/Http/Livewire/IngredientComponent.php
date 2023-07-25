<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use App\Models\Recette;
use Livewire\Component;

class IngredientComponent extends Component
{
    public string $name = '';
    public string $description = '';
    protected $listeners =
    [
        'finish' => 'added'
    ];
    public bool $is_added = false;
    public Recette $recette;
    public int $current_id = 0;
    public function start_add($id)
    {
        $this->current_id = $id;
    }
    public function added()
    {
        $this->reset('current_id');
        session()->flash('success' , 'Ingredient ajouté avec succes');
    }
    public function save()
    {
        $this->recette = Recette::create(
            [
                'name' => $this->name,
                'description' => $this->description
            ]
        );
        $this->is_added = true;
        session()->flash('success', 'Recipe added with succes');
    }

    public function render()
    {

        return view(
            'livewire.ingredient-component',
            [
                'ingredients' => Ingredient::all()
            ]
        );
    }
}
