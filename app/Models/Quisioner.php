<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quisioner extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'for',
        'question',
        'status',
    ];
}
