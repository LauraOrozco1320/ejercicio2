<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('destinations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'hora_salida' => 'required|string|max:255',
            'hora_llegada' => 'required|string|max:255',
        ]);

        Destination::create($request->all());

        return redirect()->route('destinations.index');
    }

    public function show(Destination $destination)
    {
        return view('destinations.show', compact('destination'));
    }

    public function edit(Destination $destination)
    {
        return view('destinations.edit', compact('destination'));
    }

    public function update(Request $request, Destination $destination)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'hora_salida' => 'required|string|max:255',
            'hora_llegada' => 'required|string|max:255',
        ]);

        $destination->update($request->all());

        return redirect()->route('destinations.index');
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();

        return redirect()->route('destinations.index');
    }
}
