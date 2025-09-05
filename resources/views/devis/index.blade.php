@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Devis</h1>
    <a href="{{ route('devis.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un Devis</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Nom du Client</th>
                    <th class="py-2 px-4 border">Adresse</th>
                    <th class="py-2 px-4 border">Total HT</th>
                    <th class="py-2 px-4 border">Statut</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($devis as $devi)
                <tr>
                    <td class="py-2 px-4 border">{{ $devi->id }}</td>
                    <td class="py-2 px-4 border">{{ $devi->client_nom }}</td>
                    <td class="py-2 px-4 border">{{ $devi->client_adresse }}</td>
                    <td class="py-2 px-4 border">{{ $devi->total_ht }}</td>
                    <td class="py-2 px-4 border">{{ $devi->statut }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('devis.show', $devi) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('devis.edit', $devi) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('devis.destroy', $devi) }}" method="POST" class="inline">
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