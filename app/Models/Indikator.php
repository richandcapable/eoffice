<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $fillable = [
        'indikator',
        'satuan_pengukuran',
        'target_kondisi_awal',
        'target_tahun_2021',
        'target_tahun_2022',
        'target_tahun_2023',
        'target_tahun_2024',
        'target_tahun_2025',
        'target_kondisi_akhir'
    ];
}
