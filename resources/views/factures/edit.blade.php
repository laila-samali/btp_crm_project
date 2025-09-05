@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Modifier la Facture</h1>
    <form action="{{ route('factures.update', $facture) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="numero_facture" class="block text-gray-700">Numéro de Facture</label>
            <input type="text" name="numero_facture" id="numero_facture" value="{{ $facture->numero_facture }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="client_id" class="block text-gray-700">Client</label>
            <select name="client_id" id="client_id" class="w-full border rounded-lg px-3 py-2" required>
                @foreach($clients as $client)
                <option value="{{ $client->id }}" {{ $client->id == $facture->client_id ? 'selected' : '' }}>{{ $client->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="date_facture" class="block text-gray-700">Date</label>
            <input type="date" name="date_facture" id="date_facture" value="{{ $facture->date_facture }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="total_ttc" class="block text-gray-700">Total TTC</label>
            <input type="number" name="total_ttc" id="total_ttc" value="{{ $facture->total_ttc }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="statut" class="block text-gray-700">Statut</label>
            <input type="text" name="statut" id="statut" value="{{ $facture->statut }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection