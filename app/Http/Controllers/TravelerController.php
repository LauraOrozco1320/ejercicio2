<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveler;

class TravelerController extends Controller
{
    public function index()
    {
        $travelers = Traveler::all();
        return view('travelers.index', compact('travelers'));
    }

    public function create()
    {
        return view('travelers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|integer',
            'journey_id' => 'required|exists:journeys,id',
        ]);

        Traveler::create($request->all());

        return redirect()->route('travelers.index');
    }

    public function show(Traveler $traveler)
    {
        return view('travelers.show', compact('traveler'));
    }

    public function edit(Traveler $traveler)
    {
        return view('travelers.edit', compact('traveler'));
    }

    public function update(Request $request, Traveler $traveler)
    {
        $request->validate([
            'dni' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|integer',
            'journey_id' => 'required|exists:journeys,id',
        ]);

        $traveler->update($request->all());

        return redirect()->route('travelers.index');
    }

    public function destroy(Traveler $traveler)
    {
        $traveler->delete();

        return redirect()->route('travelers.index');
    }
}
