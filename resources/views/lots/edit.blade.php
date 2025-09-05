@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Modifier le Lot</h1>
    <form action="{{ route('lots.update', $lot) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nom" class="block text-gray-700">Nom</label>
            <input type="text" name="nom" id="nom" value="{{ $lot->nom }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full border rounded-lg px-3 py-2">{{ $lot->description }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection