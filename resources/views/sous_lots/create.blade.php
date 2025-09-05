@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter un Sous-Lot</h1>
    <form action="{{ route('souslots.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="nom" class="block text-gray-700">Nom</label>
            <input type="text" name="nom" id="nom" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full border rounded-lg px-3 py-2"></textarea>
        </div>
        <div class="mb-4">
            <label for="lot_id" class="block text-gray-700">Lot</label>
            <select name="lot_id" id="lot_id" class="w-full border rounded-lg px-3 py-2" required>
                @foreach($lots as $lot)
                <option value="{{ $lot->id }}">{{ $lot->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection