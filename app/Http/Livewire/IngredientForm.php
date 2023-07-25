<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IngredientForm extends Component
{
    public int $id = 0;
    public string $quantity = '';
    public function save()
    {
        $this->emit('onAdd' , $this->id , $this->quantity);
    }
    public function render()
    {
        return view('livewire.ingredient-form');
    }
}
