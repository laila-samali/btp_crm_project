@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-6">Tableau de bord</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="{{ route('users.index') }}" class="bg-blue-500 text-white p-4 rounded-lg shadow hover:bg-blue-600">
            <h2 class="text-lg font-bold">Utilisateurs</h2>
            <p class="text-sm">Gérez les utilisateurs de l'application.</p>
        </a>
        <a href="{{ route('lots.index') }}" class="bg-green-500 text-white p-4 rounded-lg shadow hover:bg-green-600">
            <h2 class="text-lg font-bold">Lots</h2>
            <p class="text-sm">Surveillez et gérez les lots.</p>
        </a>
        <a href="{{ route('sous_lots.index') }}" class="bg-yellow-500 text-white p-4 rounded-lg shadow hover:bg-yellow-600">
            <h2 class="text-lg font-bold">Sous-lots</h2>
            <p class="text-sm">Sous-division des lots.</p>
        </a>
        <a href="{{ route('factures.index') }}" class="bg-red-500 text-white p-4 rounded-lg shadow hover:bg-red-600">
            <h2 class="text-lg font-bold">Factures</h2>
            <p class="text-sm">Gérez toutes les factures.</p>
        </a>
        <a href="{{ route('paiements.index') }}" class="bg-purple-500 text-white p-4 rounded-lg shadow hover:bg-purple-600">
            <h2 class="text-lg font-bold">Paiements</h2>
            <p class="text-sm">Suivez les paiements des clients.</p>
        </a>
        <a href="{{ route('devis.index') }}" class="bg-indigo-500 text-white p-4 rounded-lg shadow hover:bg-indigo-600">
            <h2 class="text-lg font-bold">Devis</h2>
            <p class="text-sm">Gérez les devis des clients.</p>
        </a>
    </div>
</div>
@endsection