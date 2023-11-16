<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $table = 'misis';
    protected $primarykey = "id";
    protected $fillable = [
        'misi',
        'tujuan_id',
    ];

    public function tujuan()
    {
        return $this->hasMany(Tujuan::class);
    }
}
