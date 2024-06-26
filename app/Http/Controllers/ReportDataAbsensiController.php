<?php

namespace App\Http\Controllers;

use App\Models\ReportDataAbsensi;
use App\Models\AnggotaDPRD;
use Illuminate\Http\Request;

class ReportDataAbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = ReportDataAbsensi::with('anggotaDPRD')->get();
        return view('report_data_absensi.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = AnggotaDPRD::all();
        return view('report_data_absensi.create', compact('anggota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
            'anggota_dprd_id' => 'required|exists:anggota_dprds,id',
            'status_kehadiran' => 'required|in:Hadir,Tidak Hadir,Abstain',
        ]);

        ReportDataAbsensi::create($request->all());

        return redirect()->route('report_data_absensi.index')
                         ->with('success', 'Report Data Absensi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReportDataAbsensi $reportDataAbsensi)
    {
        return view('report_data_absensi.show', compact('reportDataAbsensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReportDataAbsensi $reportDataAbsensi)
    {
        $anggota = AnggotaDPRD::all();
        return view('report_data_absensi.edit', compact('reportDataAbsensi', 'anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReportDataAbsensi $reportDataAbsensi)
    {
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
            'anggota_dprd_id' => 'required|exists:anggota_dprds,id',
            'status_kehadiran' => 'required|in:Hadir,Tidak Hadir,Abstain',
        ]);

        $reportDataAbsensi->update($request->all());

        return redirect()->route('report_data_absensi.index')
                         ->with('success', 'Report Data Absensi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReportDataAbsensi $reportDataAbsensi)
    {
        $reportDataAbsensi->delete();

        return redirect()->route('report_data_absensi.index')
                         ->with('success', 'Report Data Absensi deleted successfully.');
    }
}
