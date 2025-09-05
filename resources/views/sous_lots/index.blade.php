@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Sous-Lots</h1>
    <a href="{{ route('souslots.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un Sous-Lot</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Description</th>
                    <th class="py-2 px-4 border">Lot</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($souslots as $souslot)
                <tr>
                    <td class="py-2 px-4 border">{{ $souslot->id }}</td>
                    <td class="py-2 px-4 border">{{ $souslot->nom }}</td>
                    <td class="py-2 px-4 border">{{ $souslot->description }}</td>
                    <td class="py-2 px-4 border">{{ $souslot->lot->nom }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('souslots.show', $souslot) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('souslots.edit', $souslot) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('souslots.destroy', $souslot) }}" method="POST" class="inline">
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