@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Modifier l'Article</h1>
    <form action="{{ route('articles.update', $article) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="code" class="block text-gray-700">Code</label>
            <input type="text" name="code" id="code" value="{{ $article->code }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full border rounded-lg px-3 py-2">{{ $article->description }}</textarea>
        </div>
        <div class="mb-4">
            <label for="quantite" class="block text-gray-700">Quantité</label>
            <input type="number" name="quantite" id="quantite" value="{{ $article->quantite }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection