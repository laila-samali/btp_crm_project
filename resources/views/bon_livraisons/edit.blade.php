@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Modifier le Bon de Livraison</h1>
    <form action="{{ route('bon_livraisons.update', $bonLivraison) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="numero_bl" class="block text-gray-700">Numéro BL</label>
            <input type="text" name="numero_bl" id="numero_bl" value="{{ $bonLivraison->numero_bl }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="client_nom" class="block text-gray-700">Nom du Client</label>
            <input type="text" name="client_nom" id="client_nom" value="{{ $bonLivraison->client_nom }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="projet" class="block text-gray-700">Projet</label>
            <input type="text" name="projet" id="projet" value="{{ $bonLivraison->projet }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="statut" class="block text-gray-700">Statut</label>
            <input type="text" name="statut" id="statut" value="{{ $bonLivraison->statut }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection