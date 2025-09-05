@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Détails du Devis</h1>
    <div class="bg-white shadow rounded-lg p-6">
        <p><strong>Nom du Client :</strong> {{ $devi->client_nom }}</p>
        <p><strong>Adresse :</strong> {{ $devi->client_adresse }}</p>
        <p><strong>Total HT :</strong> {{ $devi->total_ht }}</p>
        <p><strong>Statut :</strong> {{ $devi->statut }}</p>
    </div>
    <a href="{{ route('devis.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4">Retour</a>
</div>
@endsection