<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata'; 
    public $timestamps = false;

    protected $fillable = [
        'nama_wisata',
        'deskripsi_wisata',
        'foto_wisata',
        'wa_wisata'
    ];
}