<form action="" wire:submit.prevent='save' method="post">
    <div wire:loading class="alert alert-warning">
        Enrégistrement...
    </div>
    <input type="text" name="" placeholder="entrez la quantité" wire:model.lazy="quantity" id="" class="form-control">
    <button  class="btn btn-success" type="submit">Valider</button>
</form>
