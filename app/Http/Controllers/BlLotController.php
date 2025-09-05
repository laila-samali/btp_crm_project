<?php

namespace App\Http\Controllers;

use App\Models\BlLot;
use Illuminate\Http\Request;

class BlLotController extends Controller
{
    public function index()
    {
        $blLots = BlLot::all();
        return view('bl_lots.index', compact('blLots'));
    }

    public function create()
    {
        return view('bl_lots.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bon_livraison_id' => 'required|exists:bon_livraisons,id',
            'lot_id' => 'required|exists:lots,id',
            'quantite_livree' => 'required|integer|min:0',
        ]);

        BlLot::create($validated);

        return redirect()->route('bl_lots.index');
    }

    public function show(BlLot $blLot)
    {
        return view('bl_lots.show', compact('blLot'));
    }

    public function edit(BlLot $blLot)
    {
        return view('bl_lots.edit', compact('blLot'));
    }

    public function update(Request $request, BlLot $blLot)
    {
        $validated = $request->validate([
            'bon_livraison_id' => 'required|exists:bon_livraisons,id',
            'lot_id' => 'required|exists:lots,id',
            'quantite_livree' => 'required|integer|min:0',
        ]);

        $blLot->update($validated);

        return redirect()->route('bl_lots.index');
    }

    public function destroy(BlLot $blLot)
    {
        $blLot->delete();

        return redirect()->route('bl_lots.index');
    }
}