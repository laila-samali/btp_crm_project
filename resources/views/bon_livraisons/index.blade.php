@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Bons de Livraison</h1>
    <a href="{{ route('bon_livraisons.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un Bon de Livraison</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Numéro BL</th>
                    <th class="py-2 px-4 border">Client</th>
                    <th class="py-2 px-4 border">Projet</th>
                    <th class="py-2 px-4 border">Statut</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bonLivraisons as $bonLivraison)
                <tr>
                    <td class="py-2 px-4 border">{{ $bonLivraison->id }}</td>
                    <td class="py-2 px-4 border">{{ $bonLivraison->numero_bl }}</td>
                    <td class="py-2 px-4 border">{{ $bonLivraison->client_nom }}</td>
                    <td class="py-2 px-4 border">{{ $bonLivraison->projet }}</td>
                    <td class="py-2 px-4 border">{{ $bonLivraison->statut }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('bon_livraisons.show', $bonLivraison) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('bon_livraisons.edit', $bonLivraison) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('bon_livraisons.destroy', $bonLivraison) }}" method="POST" class="inline">
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