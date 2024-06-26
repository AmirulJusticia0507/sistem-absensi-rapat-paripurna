<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiRapur extends Model
{
    use HasFactory;
    protected $fillable = [
        'anggota_dprd_id',
        'status_kehadiran',
    ];

    public function anggotaDPRD()
    {
        return $this->belongsTo(AnggotaDPRD::class);
    }
}
