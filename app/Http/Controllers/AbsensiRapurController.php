<?php

namespace App\Http\Controllers;

use App\Models\AbsensiRapur;
use App\Models\AnggotaDPRD;
use Illuminate\Http\Request;

class AbsensiRapurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensi = AbsensiRapur::with('anggotaDPRD')->get();
        return view('absensi_rapur.index', compact('absensi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = AnggotaDPRD::all();
        return view('absensi_rapur.create', compact('anggota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'anggota_dprd_id' => 'required|exists:anggota_dprds,id',
            'status_kehadiran' => 'required|in:Hadir,Tidak Hadir,Abstain',
        ]);

        AbsensiRapur::create($request->all());

        return redirect()->route('absensi_rapur.index')
                         ->with('success', 'Absensi Rapur created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AbsensiRapur $absensiRapur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbsensiRapur $absensiRapur)
    {
        $anggota = AnggotaDPRD::all();
        return view('absensi_rapur.edit', compact('absensiRapur', 'anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AbsensiRapur $absensiRapur)
    {
        $request->validate([
            'anggota_dprd_id' => 'required|exists:anggota_dprds,id',
            'status_kehadiran' => 'required|in:Hadir,Tidak Hadir,Abstain',
        ]);

        $absensiRapur->update($request->all());

        return redirect()->route('absensi_rapur.index')
                         ->with('success', 'Absensi Rapur updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbsensiRapur $absensiRapur)
    {
        $absensiRapur->delete();

        return redirect()->route('absensi_rapur.index')
                         ->with('success', 'Absensi Rapur deleted successfully.');
    }
}
