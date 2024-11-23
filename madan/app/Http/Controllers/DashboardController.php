<?php

namespace App\Http\Controllers;

use App\Models\Cpenerima;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $cpenerima = Cpenerima::count();
        return view('dashboard.index', compact('title', 'cpenerima'));
    }
}
