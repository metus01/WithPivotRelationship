<div  x-data="{selection:@entangle('selection').defer,
quantities:@entangle('quantities').defer
}"   class="container">
    <span x-html='JSON.stringify(selection)'></span>
    <span x-html='JSON.stringify(quantities)'></span>
    @foreach ($ingredients as $ingredient)
        <input type="checkbox" name="" id="" x-model='selection' value="{{ $ingredient->name }}">
        <span>{{ $ingredient->name }}</span><input type="text" value=""  x-model='quantities' name="">
    @endforeach
</div>
