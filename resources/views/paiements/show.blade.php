@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Détails du Paiement</h1>
    <div class="bg-white shadow rounded-lg p-6">
        <p><strong>Facture :</strong> {{ $paiement->facture->numero_facture }}</p>
        <p><strong>Date de Paiement :</strong> {{ $paiement->date_paiement }}</p>
        <p><strong>Type de Paiement :</strong> {{ $paiement->type_paiement }}</p>
        <p><strong>Montant :</strong> {{ $paiement->montant }}</p>
        <p><strong>Commentaire :</strong> {{ $paiement->commentaire }}</p>
    </div>
    <a href="{{ route('paiements.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4">Retour</a>
</div>
@endsection