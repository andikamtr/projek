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

    public function tambah(Request $request)
    {
        $validate = $request->validate([
            'nama_kriteria' => 'required',
        ]);

        Kriteria::create($validate);

        return redirect()->back();
    }

    public function hapus($id)
    {
        Kriteria::where('id_kriteria', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Kriteria";
        $kriteria = Kriteria::where('id_kriteria', $id)->get();
        return view('kriteria.edit', compact('title', 'kriteria'));
    }

    public function update(Request $request)
    {
        Kriteria::where('id_kriteria', $request->id_kriteria)->update([
            'nama_kriteria' => $request->nama_kriteria
        ]);

        return redirect('/kriteria');
    }
}
