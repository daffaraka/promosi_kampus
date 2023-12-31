<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'user',
        'as',
    ];


    public function pertanyaanRespondens()
    {
        return $this->belongsToMany(PertanyaanResponden::class, 'pertanyaan_respondens', 'id', 'id_responden');
    }
}
