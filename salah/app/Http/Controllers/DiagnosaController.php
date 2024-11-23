<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{
    public function index()
    {
        $title = "Diagnosa Kerusakan";
        $gejala = Gejala::all();
        $pertanyaan = Pertanyaan::all();
        return view('dashboard.diagnosa', [
            'title' => $title,
            'gejala' => $gejala,
            'pertanyaan' => $pertanyaan,
        ]);
    }
}
