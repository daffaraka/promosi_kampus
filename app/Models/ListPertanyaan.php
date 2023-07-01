<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPertanyaan extends Model
{

    use HasFactory;

    protected $fillable =
    [
        'judul_pertanyaan',
        'id_jenis_quisioner',
    ];

    public function jenisQuisioner()
    {
        return $this->belongsTo(JenisQuisioner::class,'id_jenis_quisioner');
    }
}
