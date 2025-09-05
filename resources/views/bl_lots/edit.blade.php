@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Modifier le BL Lot</h1>
    <form action="{{ route('bl_lots.update', $blLot) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="bon_livraison_id" class="block text-gray-700">Bon Livraison</label>
            <input type="number" name="bon_livraison_id" id="bon_livraison_id" value="{{ $blLot->bon_livraison_id }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="lot_id" class="block text-gray-700">Lot</label>
            <input type="number" name="lot_id" id="lot_id" value="{{ $blLot->lot_id }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="quantite_livree" class="block text-gray-700">Quantité Livrée</label>
            <input type="number" name="quantite_livree" id="quantite_livree" value="{{ $blLot->quantite_livree }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection