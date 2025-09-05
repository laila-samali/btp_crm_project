<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::all();
        return view('factures.index', compact('factures'));
    }

    public function create()
    {
        return view('factures.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero_facture' => 'required|string|max:255|unique:factures,numero_facture',
            'client_id' => 'required|exists:clients,id',
            'date_facture' => 'required|date',
            'total_ht' => 'required|numeric|min:0',
            'tva' => 'required|numeric|min:0',
            'total_ttc' => 'required|numeric|min:0',
            'statut' => 'required|string|max:255',
            'motif_annulation' => 'nullable|string',
            'facture_signee_path' => 'nullable|string|max:255',
        ]);

        Facture::create($validated);

        return redirect()->route('factures.index');
    }

    public function show(Facture $facture)
    {
        return view('factures.show', compact('facture'));
    }

    public function edit(Facture $facture)
    {
        return view('factures.edit', compact('facture'));
    }

    public function update(Request $request, Facture $facture)
    {
        $validated = $request->validate([
            'numero_facture' => 'required|string|max:255|unique:factures,numero_facture,' . $facture->id,
            'client_id' => 'required|exists:clients,id',
            'date_facture' => 'required|date',
            'total_ht' => 'required|numeric|min:0',
            'tva' => 'required|numeric|min:0',
            'total_ttc' => 'required|numeric|min:0',
            'statut' => 'required|string|max:255',
            'motif_annulation' => 'nullable|string',
            'facture_signee_path' => 'nullable|string|max:255',
        ]);

        $facture->update($validated);

        return redirect()->route('factures.index');
    }

    public function destroy(Facture $facture)
    {
        $facture->delete();

        return redirect()->route('factures.index');
    }
}