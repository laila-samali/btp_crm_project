@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Articles</h1>
    <a href="{{ route('articles.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un Article</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Code</th>
                    <th class="py-2 px-4 border">Description</th>
                    <th class="py-2 px-4 border">Quantité</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td class="py-2 px-4 border">{{ $article->id }}</td>
                    <td class="py-2 px-4 border">{{ $article->code }}</td>
                    <td class="py-2 px-4 border">{{ $article->description }}</td>
                    <td class="py-2 px-4 border">{{ $article->quantite }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('articles.show', $article) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('articles.edit', $article) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection