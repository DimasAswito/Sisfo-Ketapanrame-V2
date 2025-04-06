<?php

namespace App\Http\Controllers;
use App\Models\Penginapan;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
    public function index()
    {
    $penginapans = Penginapan::all();
    return view('penginapan', compact('penginapans'));
    }
}