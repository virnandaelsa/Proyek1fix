<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

    protected $table = 'chef';

    public $primaryKey = 'nip';

    public $keyType = 'string';

    protected $fillable = [
        'nip',
        'name',
        'no_tlp',
        'alamat',
    ];
}
