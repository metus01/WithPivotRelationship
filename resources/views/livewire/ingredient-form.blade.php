<form action="" wire:submit.prevent='saveIng'  method="post">
    <div wire:loading class="alert alert-warning">
        Enrégistrement...
    </div>
    <div class="container" >
        <input type="text" name=""  placeholder="entrez la quantité" wire:model.defer="ri.quantity" class="form-control">
    </div>
    <button  wire:click="saveIng" class="btn btn-danger">Valider</button>
</form>

