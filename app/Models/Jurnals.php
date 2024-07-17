<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnals extends Model
{
    use HasFactory;

    protected $table = 'jurnals';
    // protected $fillable = ['hari_tgl', 'jenis_pekerjaan', 'solusi', 'alat', 'masalah'];
    protected $guarded = ['id'];

}
