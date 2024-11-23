<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $title = "Beranda";
        return view('beranda', compact('title'));
    }
}
