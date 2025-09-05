@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter un Paiement</h1>
    <form action="{{ route('paiements.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="facture_id" class="block text-gray-700">Facture</label>
            <select name="facture_id" id="facture_id" class="w-full border rounded-lg px-3 py-2" required>
                @foreach($factures as $facture)
                <option value="{{ $facture->id }}">{{ $facture->numero_facture }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="date_paiement" class="block text-gray-700">Date de Paiement</label>
            <input type="date" name="date_paiement" id="date_paiement" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="type_paiement" class="block text-gray-700">Type de Paiement</label>
            <input type="text" name="type_paiement" id="type_paiement" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="montant" class="block text-gray-700">Montant</label>
            <input type="number" name="montant" id="montant" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="commentaire" class="block text-gray-700">Commentaire</label>
            <textarea name="commentaire" id="commentaire" class="w-full border rounded-lg px-3 py-2"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection