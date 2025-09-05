@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter un Devis</h1>
    <form action="{{ route('devis.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="client_nom" class="block text-gray-700">Nom du Client</label>
            <input type="text" name="client_nom" id="client_nom" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="client_adresse" class="block text-gray-700">Adresse</label>
            <input type="text" name="client_adresse" id="client_adresse" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="total_ht" class="block text-gray-700">Total HT</label>
            <input type="number" name="total_ht" id="total_ht" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="statut" class="block text-gray-700">Statut</label>
            <input type="text" name="statut" id="statut" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection