<div>
    <h1>Listado de Artículos</h1>
    <input wire:model="show" type="checkbox">

    <input wire:model="search" type="search" placeholder="Buscar..">

    @if ($show)
    <h2>Categoría: @json($category)</h2>
    <h2>Etiquetas: @json($tags)</h2>
    <label>
        Tag 1
        <input wire:model="tags" type="checkbox" value="tag1">
    </label>
    <label>
        Tag 2
        <input wire:model="tags" type="checkbox" value="tag2">
    </label>
    <br>
    <select wire:model="tags" multiple>
        <option value="">Seleccione</option>
        <option value="tag1">Tag 1</option>
        <option value="tag2">Tag 2</option>
    </select>

    <input
        wire:model="category.name"
        type="text"
        placeholder="Categoría...">
    <input
        wire:model="one"
        type="text">
    @endif
    <ul>
        @foreach ($articles as $article)
        <li>{{ $article->title }}</li>
        @endforeach
    </ul>
</div>
