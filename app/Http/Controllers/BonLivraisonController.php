<?php

namespace App\Http\Controllers;

use App\Models\BonLivraison;
use Illuminate\Http\Request;

class BonLivraisonController extends Controller
{
    public function index()
    {
        $bonLivraisons = BonLivraison::all();
        return view('bon_livraisons.index', compact('bonLivraisons'));
    }

    public function create()
    {
        return view('bon_livraisons.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero_bl' => 'required|string|max:255|unique:bon_livraisons,numero_bl',
            'devis_id' => 'required|exists:devis,id',
            'client_nom' => 'required|string|max:255',
            'client_adresse' => 'required|string|max:255',
            'client_ice' => 'nullable|string|max:255',
            'projet' => 'required|string|max:255',
            'date_bl' => 'required|date',
            'statut' => 'required|string|max:255',
            'bl_signe_path' => 'nullable|string|max:255',
        ]);

        BonLivraison::create($validated);

        return redirect()->route('bon_livraisons.index');
    }

    public function show(BonLivraison $bonLivraison)
    {
        return view('bon_livraisons.show', compact('bonLivraison'));
    }

    public function edit(BonLivraison $bonLivraison)
    {
        return view('bon_livraisons.edit', compact('bonLivraison'));
    }

    public function update(Request $request, BonLivraison $bonLivraison)
    {
        $validated = $request->validate([
            'numero_bl' => 'required|string|max:255|unique:bon_livraisons,numero_bl,' . $bonLivraison->id,
            'devis_id' => 'required|exists:devis,id',
            'client_nom' => 'required|string|max:255',
            'client_adresse' => 'required|string|max:255',
            'client_ice' => 'nullable|string|max:255',
            'projet' => 'required|string|max:255',
            'date_bl' => 'required|date',
            'statut' => 'required|string|max:255',
            'bl_signe_path' => 'nullable|string|max:255',
        ]);

        $bonLivraison->update($validated);

        return redirect()->route('bon_livraisons.index');
    }

    public function destroy(BonLivraison $bonLivraison)
    {
        $bonLivraison->delete();

        return redirect()->route('bon_livraisons.index');
    }
}