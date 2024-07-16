<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Origin;

class OriginController extends Controller
{
    public function index()
    {
        $origins = Origin::all();
        return view('origins.index', compact('origins'));
    }

    public function create()
    {
        return view('origins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sala_abordaje' => 'required|string|max:255',
        ]);

        Origin::create($request->all());

        return redirect()->route('origins.index');
    }

    public function show(Origin $origin)
    {
        return view('origins.show', compact('origin'));
    }

    public function edit(Origin $origin)
    {
        return view('origins.edit', compact('origin'));
    }

    public function update(Request $request, Origin $origin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sala_abordaje' => 'required|string|max:255',
        ]);

        $origin->update($request->all());

        return redirect()->route('origins.index');
    }

    public function destroy(Origin $origin)
    {
        $origin->delete();

        return redirect()->route('origins.index');
    }
}
