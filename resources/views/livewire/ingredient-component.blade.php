<div x-data="{selected:@entangle('ingredientSelected')}" class="container" >
    @foreach ($ingredients as $ingredient)
        <input type="checkbox"  x-model="selected" class="form-input" value="{{ $ingredient->id }}">
        <span>{{ $ingredient->name }}</span>
        <span><input type="text" name=""  placeholder="quantité" class="ml-4" id=""></span>    @endforeach
        <button wire:click='done'>Allez</button>
        {{ dump($ingredientSelected) }}
</div>

