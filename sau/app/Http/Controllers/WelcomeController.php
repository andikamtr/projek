<?php

namespace App\Http\Controllers;
use App\BobotNilai;
use App\Gejala;
use App\GejalaSolusi;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
	    $gejalas = Gejala::all();
	    $bobots = BobotNilai::all();
	    $gesol = GejalaSolusi::all();
	    return view('welcome_one', compact('gejalas', 'bobots', 'gesol'));
    }
}
