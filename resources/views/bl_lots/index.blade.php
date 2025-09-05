@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des BL Lots</h1>
    <a href="{{ route('bl_lots.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un BL Lot</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Bon Livraison</th>
                    <th class="py-2 px-4 border">Lot</th>
                    <th class="py-2 px-4 border">Quantité Livrée</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blLots as $blLot)
                <tr>
                    <td class="py-2 px-4 border">{{ $blLot->id }}</td>
                    <td class="py-2 px-4 border">{{ $blLot->bon_livraison_id }}</td>
                    <td class="py-2 px-4 border">{{ $blLot->lot_id }}</td>
                    <td class="py-2 px-4 border">{{ $blLot->quantite_livree }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('bl_lots.show', $blLot) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('bl_lots.edit', $blLot) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('bl_lots.destroy', $blLot) }}" method="POST" class="inline">
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