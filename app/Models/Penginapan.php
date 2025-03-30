<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Penginapan extends Model
{
    use HasFactory;
    
    protected $table = 'penginapan';
    protected $primaryKey = 'id_penginapan';
    public $timestamps = true;

    protected $fillable = [
        'nama_penginapan',
        'deskripsi_penginapan',
        'foto_penginapan',
        'wa_penginapan'
    ];
}