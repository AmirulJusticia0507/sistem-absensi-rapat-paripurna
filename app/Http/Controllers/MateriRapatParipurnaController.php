<?php

namespace App\Http\Controllers;

use App\Models\MateriRapatParipurna;
use Illuminate\Http\Request;

class MateriRapatParipurnaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = MateriRapatParipurna::all();
        return view('materi_rapat_paripurna.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materi_rapat_paripurna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        MateriRapatParipurna::create($request->all());

        return redirect()->route('materi_rapat_paripurna.index')
                         ->with('success', 'Materi Rapat Paripurna created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MateriRapatParipurna $materiRapatParipurna)
    {
        return view('materi_rapat_paripurna.show', compact('materiRapatParipurna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriRapatParipurna $materiRapatParipurna)
    {
        return view('materi_rapat_paripurna.edit', compact('materiRapatParipurna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MateriRapatParipurna $materiRapatParipurna)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $materiRapatParipurna->update($request->all());

        return redirect()->route('materi_rapat_paripurna.index')
                         ->with('success', 'Materi Rapat Paripurna updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MateriRapatParipurna $materiRapatParipurna)
    {
        $materiRapatParipurna->delete();

        return redirect()->route('materi_rapat_paripurna.index')
                         ->with('success', 'Materi Rapat Paripurna deleted successfully.');
    }
}
