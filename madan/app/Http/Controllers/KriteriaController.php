<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $title = "Kriteria";
        $kriteria = Kriteria::all();
        return view('kriteria.index', compact('title', 'kriteria'));
    }

    public function edit($id)
    {
        $title = "Edit Kriteria";
        $kriteria = Kriteria::where('kd_kriteria', $id)->get();
        return view('kriteria.edit', compact('title', 'kriteria'));
    }

    public function update(Request $request)
    {
        Kriteria::where('kd_kriteria', $request->kd_kriteria)->update([
            'kd_kriteria' => $request->kd_kriteria,
            'kriteria' => $request->kriteria,
            'nilai' => $request->nilai
        ]);

        return redirect('/kriteria');
    }
}
