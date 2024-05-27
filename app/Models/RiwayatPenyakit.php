<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenyakit extends Model
{
    use HasFactory;

    protected $table = 'riwayat_penyakit';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_penyakit',
    ];

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}
