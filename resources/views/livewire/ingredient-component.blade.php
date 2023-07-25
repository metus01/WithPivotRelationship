<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{  session('success') }}
    </div>
    @endif
    <form action="" class=" gap-3" wire:submit.prevent='save'>
        <input type="text" name="" id="" wire:model.lazy="name" class="form-control m-4">
        <input type="text" name="" id="" class="form-control m-4" wire:model.lazy="description">
        @if ($is_added == false)
        <button class="btn btn-success" type="submit">Ajouter la recette</button>
        @endif
    </form>
    @if ($is_added == true)
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <th>Nom</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->name }}</td>
                        <td><button wire:click="start_add({{ $ingredient->id }})" class="btn btn-primary">Add</button></td>
                    </tr>
                    @if ($current_id == $ingredient->id)
                        <livewire:ingredient-form :recette="$recette" :ingredient="$ingredient" :key="$ingredient->id"></livewire:ingredient-form>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
