@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Détails du Bon de Livraison</h1>
    <div class="bg-white shadow rounded-lg p-6">
        <p><strong>Numéro BL :</strong> {{ $bonLivraison->numero_bl }}</p>
        <p><strong>Nom du Client :</strong> {{ $bonLivraison->client_nom }}</p>
        <p><strong>Projet :</strong> {{ $bonLivraison->projet }}</p>
        <p><strong>Statut :</strong> {{ $bonLivraison->statut }}</p>
    </div>
    <a href="{{ route('bon_livraisons.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4">Retour</a>
</div>
@endsection