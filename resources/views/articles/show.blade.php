@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Détails de l'Article</h1>
    <div class="bg-white shadow rounded-lg p-6">
        <p><strong>Code :</strong> {{ $article->code }}</p>
        <p><strong>Description :</strong> {{ $article->description }}</p>
        <p><strong>Quantité :</strong> {{ $article->quantite }}</p>
    </div>
    <a href="{{ route('articles.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4">Retour</a>
</div>
@endsection