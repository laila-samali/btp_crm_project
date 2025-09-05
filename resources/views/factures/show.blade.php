@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Détails de la Facture</h1>
    <div class="bg-white shadow rounded-lg p-6">
        <p><strong>Numéro de Facture :</strong> {{ $facture->numero_facture }}</p>
        <p><strong>Client :</strong> {{ $facture->client->name }}</p>
        <p><strong>Date :</strong> {{ $facture->date_facture }}</p>
        <p><strong>Total TTC :</strong> {{ $facture->total_ttc }}</p>
        <p><strong>Statut :</strong> {{ $facture->statut }}</p>
    </div>
    <a href="{{ route('factures.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4">Retour</a>
</div>
@endsection