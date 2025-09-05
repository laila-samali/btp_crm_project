@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Utilisateurs</h1>
    <a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un Utilisateur</a>
    <div class="mt-4">
        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Email</th>
                    <th class="py-2 px-4 border">Rôle</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="py-2 px-4 border">{{ $user->id }}</td>
                    <td class="py-2 px-4 border">{{ $user->name }}</td>
                    <td class="py-2 px-4 border">{{ $user->email }}</td>
                    <td class="py-2 px-4 border">{{ $user->role }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('users.show', $user) }}" class="text-blue-500">Voir</a> |
                        <a href="{{ route('users.edit', $user) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
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