@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Modifier l'Utilisateur</h1>
    <form action="{{ route('users.update', $user) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nom</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Mot de passe</label>
            <input type="password" name="password" id="password" class="w-full border rounded-lg px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="role" class="block text-gray-700">Rôle</label>
            <select name="role" id="role" class="w-full border rounded-lg px-3 py-2">
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>Utilisateur</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection