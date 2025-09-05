<?php

namespace App\Http\Controllers;

use App\Models\SousLot;
use Illuminate\Http\Request;

class SousLotController extends Controller
{
    public function index()
    {
        $sousLots = SousLot::all();
        return view('sous_lots.index', compact('sousLots'));
    }

    public function create()
    {
        return view('sous_lots.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'lot_id' => 'required|exists:lots,id',
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        SousLot::create($validated);

        return redirect()->route('sous_lots.index');
    }

    public function show(SousLot $sousLot)
    {
        return view('sous_lots.show', compact('sousLot'));
    }

    public function edit(SousLot $sousLot)
    {
        return view('sous_lots.edit', compact('sousLot'));
    }

    public function update(Request $request, SousLot $sousLot)
    {
        $validated = $request->validate([
            'lot_id' => 'required|exists:lots,id',
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $sousLot->update($validated);

        return redirect()->route('sous_lots.index');
    }

    public function destroy(SousLot $sousLot)
    {
        $sousLot->delete();

        return redirect()->route('sous_lots.index');
    }
}