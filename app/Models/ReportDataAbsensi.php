<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportDataAbsensi extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_awal',
        'tanggal_akhir',
        'anggota_dprd_id',
        'status_kehadiran',
    ];

    public function anggotaDPRD()
    {
        return $this->belongsTo(AnggotaDPRD::class);
    }
}
