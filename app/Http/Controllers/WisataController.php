<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
    $wisatas = Wisata::all();
    return view('wisata', compact('wisatas'));
    }

    public function show($id)
{
    $wisata = Wisata::findOrFail($id);
    return view('wisata-detail', compact('wisata'));
}

}