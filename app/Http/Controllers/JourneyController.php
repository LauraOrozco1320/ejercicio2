<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journey;

class JourneyController extends Controller
{
    public function index()
    {
        $journeys = Journey::all();
        return view('journeys.index', compact('journeys'));
    }

    public function create()
    {
        return view('journeys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'num_plazas' => 'required|integer',
            'fecha' => 'required|string|max:255',
            'origin_id' => 'required|exists:origins,id',
            'destination_id' => 'required|exists:destinations,id',
        ]);

        Journey::create($request->all());

        return redirect()->route('journeys.index');
    }

    public function show(Journey $journey)
    {
        return view('journeys.show', compact('journey'));
    }

    public function edit(Journey $journey)
    {
        return view('journeys.edit', compact('journey'));
    }

    public function update(Request $request, Journey $journey)
    {
        $request->validate([
            'num_plazas' => 'required|integer',
            'fecha' => 'required|string|max:255',
            'origin_id' => 'required|exists:origins,id',
            'destination_id' => 'required|exists:destinations,id',
        ]);

        $journey->update($request->all());

        return redirect()->route('journeys.index');
    }

    public function destroy(Journey $journey)
    {
        $journey->delete();

        return redirect()->route('journeys.index');
    }
}
