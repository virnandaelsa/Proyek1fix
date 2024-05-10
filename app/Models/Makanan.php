<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'makanan';

    protected $primaryKey = 'kode_makanan';

    protected $keyType = 'string';

    protected $fillable = [
        'nama_makanan',
        'protein',
        'lemak',
        'karbohidrat',
        'id_kategori',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function konsul()
    {
        return $this->hasMany(Konsul::class);
    }
}
