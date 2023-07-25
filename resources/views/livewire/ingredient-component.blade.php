<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{  session('success') }}
    </div>
    @endif
    <form action="" class=" gap-3" wire:submit.prevent='save'>
        <input type="text" name="" id="" wire:model.lazy="name" class="form-control m-4">
        <input type="text" name="" id="" class="form-control m-4" wire:model.lazy="description">
        <button class="btn btn-success" type="submit">Ajouter la recette</button>
    </form>
</div>
