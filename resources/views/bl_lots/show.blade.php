@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Détails du BL Lot</h1>
    <div class="bg-white shadow rounded-lg p-6">
        <p><strong>Bon Livraison :</strong> {{ $blLot->bon_livraison_id }}</p>
        <p><strong>Lot :</strong> {{ $blLot->lot_id }}</p>
        <p><strong>Quantité Livrée :</strong> {{ $blLot->quantite_livree }}</p>
    </div>
    <a href="{{ route('bl_lots.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4">Retour</a>
</div>
@endsection