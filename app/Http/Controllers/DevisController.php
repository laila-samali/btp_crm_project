<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index()
    {
        $devis = Devis::all();
        return view('devis.index', compact('devis'));
    }

    public function create()
    {
        return view('devis.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_nom' => 'required|string|max:255',
            'client_adresse' => 'required|string|max:255',
            'client_ice' => 'nullable|string|max:255',
            'total_ht' => 'required|numeric|min:0',
            'tva' => 'required|numeric|min:0',
            'total_ttc' => 'required|numeric|min:0',
            'statut' => 'required|string|max:255',
            'bon_commande_path' => 'nullable|string|max:255',
            'bon_commande_name' => 'nullable|string|max:255',
        ]);

        Devis::create($validated);

        return redirect()->route('devis.index');
    }

    public function show(Devis $devi)
    {
        return view('devis.show', compact('devi'));
    }

    public function edit(Devis $devi)
    {
        return view('devis.edit', compact('devi'));
    }

    public function update(Request $request, Devis $devi)
    {
        $validated = $request->validate([
            'client_nom' => 'required|string|max:255',
            'client_adresse' => 'required|string|max:255',
            'client_ice' => 'nullable|string|max:255',
            'total_ht' => 'required|numeric|min:0',
            'tva' => 'required|numeric|min:0',
            'total_ttc' => 'required|numeric|min:0',
            'statut' => 'required|string|max:255',
            'bon_commande_path' => 'nullable|string|max:255',
            'bon_commande_name' => 'nullable|string|max:255',
        ]);

        $devi->update($validated);

        return redirect()->route('devis.index');
    }

    public function destroy(Devis $devi)
    {
        $devi->delete();

        return redirect()->route('devis.index');
    }
}