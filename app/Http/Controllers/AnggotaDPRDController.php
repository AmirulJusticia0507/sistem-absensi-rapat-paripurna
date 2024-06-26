<?php

namespace App\Http\Controllers;

use App\Models\AnggotaDPRD;
use Illuminate\Http\Request;

class AnggotaDPRDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = AnggotaDPRD::all();
        return view('anggota_dprd.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota_dprd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email|unique:anggota_dprds',
            'partai_politik' => 'required',
            'daerah_pemilihan' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
        ]);

        AnggotaDPRD::create($request->all());

        return redirect()->route('anggota_dprd.index')
                         ->with('success', 'Anggota DPRD created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AnggotaDPRD $anggotaDPRD)
    {
        return view('anggota_dprd.show', compact('anggotaDPRD'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnggotaDPRD $anggotaDPRD)
    {
        return view('anggota_dprd.edit', compact('anggotaDPRD'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnggotaDPRD $anggotaDPRD)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email|unique:anggota_dprds,email,'.$anggotaDPRD->id,
            'partai_politik' => 'required',
            'daerah_pemilihan' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
        ]);

        $anggotaDPRD->update($request->all());

        return redirect()->route('anggota_dprd.index')
                         ->with('success', 'Anggota DPRD updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaDPRD $anggotaDPRD)
    {
        $anggotaDPRD->delete();

        return redirect()->route('anggota_dprd.index')
                         ->with('success', 'Anggota DPRD deleted successfully.');
    }
}
