<?php

namespace App\Http\Controllers;

use App\Models\TempatMakan;
use Illuminate\Http\Request;

class TempatMakanController extends Controller
{
    public function index()
    {
    $tempatMakans = TempatMakan::all();
    return view('makan', compact('tempatMakans'));
    }
}