<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsul extends Model
{
    use HasFactory;

    protected $table = 'konsul';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id_pasien',
        'id_ahligizi',
        'kode_makanan',
        'tgl_konsultasi',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function ahligizi()
    {
        return $this->belongsTo(AhliGizi::class, 'id_ahligizi');
    }

    public function makanan()
    {
        return $this->belongsTo(Makanan::class, 'kode_makanan');
    }
}
