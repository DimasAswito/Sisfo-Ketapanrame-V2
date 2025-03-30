<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class TempatMakan extends Model
{
    use HasFactory;

    protected $table = 'tempat_makan';
    protected $primaryKey = 'id_tempatMakan';
    public $timestamps = true;

    protected $fillable = [
        'nama_tempatMakan',
        'deskripsi_tempatMakan',
        'foto_tempatMakan',
        'wa_tempatMakan'
    ];
}