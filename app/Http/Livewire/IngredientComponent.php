<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use App\Models\Recette;
use App\Models\RecetteIngredient;
use Livewire\Component;

class IngredientComponent extends Component
{
    public string $name = '';
    public string $description = '';
    public string $quantity = '';
    public $add_ing = false;
    public RecetteIngredient $ri ;
    protected $rules = [
        'ri.quantity' => 'required'
    ];
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
        $this->ri = new RecetteIngredient();
        $this->ri->recette_id = $this->recette->id;
        $this->ri->ingredient_id= $id;
        $this->ri->quantity = '';
        $this->ri->save();
    }
    public function added()
    {
        $this->reset('current_id');
        session()->flash('success', 'Ingredient ajouté avec succes');
    }
    public function save()
    {
        $this->recette = Recette::create(
            [
                'name' => $this->name,
                'description' => $this->description
            ]
        );
        session()->flash('success', 'Recipe added with succes');
        $this->is_added = true;
    }
    public function saveIng()
    {

        $this->ri->update(
            [
                'quantity' => $this->ri->quantity
            ]
            );
            session()->flash('success', 'Ingredient add with success');
    }
    public function startAdd()
    {
        dd('okay');
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
