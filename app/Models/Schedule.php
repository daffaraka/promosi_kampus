<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    use HasFactory;
    protected $fillable = [
        'school_id',
        'date',
        'pic_1',
        'pic_2',
        'pic_1_status',
        'pic_2_status',
        'surat_dinas',
        'description',
        'created_at',
        'updated_at',
    ];
}
