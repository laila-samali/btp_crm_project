<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use Illuminate\Http\Request;

class LotController extends Controller
{
    public function index()
    {
        $lots = Lot::all();
        return view('lots.index', compact('lots'));
    }

    public function create()
    {
        return view('lots.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'est_livre' => 'required|boolean',
            'devis_id' => 'required|exists:devis,id',
            'bon_livraison_id' => 'nullable|exists:bon_livraisons,id',
        ]);

        Lot::create($validated);

        return redirect()->route('lots.index');
    }

    public function show(Lot $lot)
    {
        return view('lots.show', compact('lot'));
    }

    public function edit(Lot $lot)
    {
        return view('lots.edit', compact('lot'));
    }

    public function update(Request $request, Lot $lot)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'est_livre' => 'required|boolean',
            'devis_id' => 'required|exists:devis,id',
            'bon_livraison_id' => 'nullable|exists:bon_livraisons,id',
        ]);

        $lot->update($validated);

        return redirect()->route('lots.index');
    }

    public function destroy(Lot $lot)
    {
        $lot->delete();

        return redirect()->route('lots.index');
    }
}