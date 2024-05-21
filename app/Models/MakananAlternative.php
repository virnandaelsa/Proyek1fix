<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakananAlternative extends Model
{
    use HasFactory;

    protected $table = 'makanan_alternative';

    protected $primaryKey = 'kode_makanan';

    protected $keyType = 'string';

    protected $fillable = [
        'nama_makanan',
        'karbohidrat',
        'lemak',
        'protein',
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
