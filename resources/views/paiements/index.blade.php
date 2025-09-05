@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Paiements</h1>
    <a href="{{ route('paiements.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un Paiement</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Facture</th>
                    <th class="py-2 px-4 border">Date Paiement</th>
                    <th class="py-2 px-4 border">Type Paiement</th>
                    <th class="py-2 px-4 border">Montant</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paiements as $paiement)
                <tr>
                    <td class="py-2 px-4 border">{{ $paiement->id }}</td>
                    <td class="py-2 px-4 border">{{ $paiement->facture->numero_facture }}</td>
                    <td class="py-2 px-4 border">{{ $paiement->date_paiement }}</td>
                    <td class="py-2 px-4 border">{{ $paiement->type_paiement }}</td>
                    <td class="py-2 px-4 border">{{ $paiement->montant }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('paiements.show', $paiement) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('paiements.edit', $paiement) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('paiements.destroy', $paiement) }}" method="POST" class="inline">
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