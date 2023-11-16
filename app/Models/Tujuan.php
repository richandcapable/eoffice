<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;

    protected $table = 'tujuans';
    protected $primarykey = 'id';
    protected $fillable = ['tujuan', 'misi_id', 'indikator_id'];

    public function misi()
    {
        return $this->belongsTo(Misi::class);
    }
}
