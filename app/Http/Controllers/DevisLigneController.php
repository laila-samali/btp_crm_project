<?php

namespace App\Http\Controllers;

use App\Models\DevisLigne;
use Illuminate\Http\Request;

class DevisLigneController extends Controller
{
    public function index()
    {
        $devisLignes = DevisLigne::all();
        return view('devis_lignes.index', compact('devisLignes'));
    }

    public function create()
    {
        return view('devis_lignes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'devis_id' => 'required|exists:devis,id',
            'code_lot' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'prix_ht' => 'required|numeric|min:0',
        ]);

        DevisLigne::create($validated);

        return redirect()->route('devis_lignes.index');
    }

    public function show(DevisLigne $devisLigne)
    {
        return view('devis_lignes.show', compact('devisLigne'));
    }

    public function edit(DevisLigne $devisLigne)
    {
        return view('devis_lignes.edit', compact('devisLigne'));
    }

    public function update(Request $request, DevisLigne $devisLigne)
    {
        $validated = $request->validate([
            'devis_id' => 'required|exists:devis,id',
            'code_lot' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'prix_ht' => 'required|numeric|min:0',
        ]);

        $devisLigne->update($validated);

        return redirect()->route('devis_lignes.index');
    }

    public function destroy(DevisLigne $devisLigne)
    {
        $devisLigne->delete();

        return redirect()->route('devis_lignes.index');
    }
}