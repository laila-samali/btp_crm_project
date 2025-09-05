<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        $paiements = Paiement::all();
        return view('paiements.index', compact('paiements'));
    }

    public function create()
    {
        return view('paiements.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'facture_id' => 'required|exists:factures,id',
            'date_paiement' => 'required|date',
            'type_paiement' => 'required|string|max:255',
            'document_path' => 'nullable|string|max:255',
            'montant' => 'required|numeric|min:0',
            'commentaire' => 'nullable|string',
        ]);

        Paiement::create($validated);

        return redirect()->route('paiements.index');
    }

    public function show(Paiement $paiement)
    {
        return view('paiements.show', compact('paiement'));
    }

    public function edit(Paiement $paiement)
    {
        return view('paiements.edit', compact('paiement'));
    }

    public function update(Request $request, Paiement $paiement)
    {
        $validated = $request->validate([
            'facture_id' => 'required|exists:factures,id',
            'date_paiement' => 'required|date',
            'type_paiement' => 'required|string|max:255',
            'document_path' => 'nullable|string|max:255',
            'montant' => 'required|numeric|min:0',
            'commentaire' => 'nullable|string',
        ]);

        $paiement->update($validated);

        return redirect()->route('paiements.index');
    }

    public function destroy(Paiement $paiement)
    {
        $paiement->delete();

        return redirect()->route('paiements.index');
    }
}