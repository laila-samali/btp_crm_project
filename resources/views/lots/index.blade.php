@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Lots</h1>
    <a href="{{ route('lots.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un Lot</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Description</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lots as $lot)
                <tr>
                    <td class="py-2 px-4 border">{{ $lot->id }}</td>
                    <td class="py-2 px-4 border">{{ $lot->nom }}</td>
                    <td class="py-2 px-4 border">{{ $lot->description }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('lots.show', $lot) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('lots.edit', $lot) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('lots.destroy', $lot) }}" method="POST" class="inline">
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