@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Factures</h1>
    <a href="{{ route('factures.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter une Facture</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Numéro de Facture</th>
                    <th class="py-2 px-4 border">Client</th>
                    <th class="py-2 px-4 border">Date</th>
                    <th class="py-2 px-4 border">Total TTC</th>
                    <th class="py-2 px-4 border">Statut</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($factures as $facture)
                <tr>
                    <td class="py-2 px-4 border">{{ $facture->id }}</td>
                    <td class="py-2 px-4 border">{{ $facture->numero_facture }}</td>
                    <td class="py-2 px-4 border">{{ $facture->client->name }}</td>
                    <td class="py-2 px-4 border">{{ $facture->date_facture }}</td>
                    <td class="py-2 px-4 border">{{ $facture->total_ttc }}</td>
                    <td class="py-2 px-4 border">{{ $facture->statut }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('factures.show', $facture) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('factures.edit', $facture) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('factures.destroy', $facture) }}" method="POST" class="inline">
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