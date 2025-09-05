@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Détails du Lot</h1>
    <div class="bg-white shadow rounded-lg p-6">
        <p><strong>Nom :</strong> {{ $lot->nom }}</p>
        <p><strong>Description :</strong> {{ $lot->description }}</p>
    </div>
    <a href="{{ route('lots.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4">Retour</a>
</div>
@endsection