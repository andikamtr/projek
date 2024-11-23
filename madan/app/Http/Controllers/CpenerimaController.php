<?php

namespace App\Http\Controllers;

use App\Models\Cpenerima;
use Illuminate\Http\Request;

class CpenerimaController extends Controller
{
    public function index()
    {
        $title = "Calon Penerima";
        $cpenerima = Cpenerima::all();
        return view('cpenerima.index', compact('title', 'cpenerima'));
    }

    public function tambah(Request $request)
    {
        Cpenerima::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'atap' => $request->atap,
            'lantai' => $request->lantai,
            'dinding' => $request->dinding,
            'tanggungan' => $request->tanggungan,
            'penghasilan' => $request->penghasilan,
            'kepemilikan_rumah' => $request->kepemilikan_rumah,
            'mck' => $request->mck
        ]);

        return redirect('/calon-penerima');
    }

    public function hapus($nik)
    {
        Cpenerima::where('nik', $nik)->delete();
        return redirect('/calon-penerima');
    }

    public function edit($nik)
    {
        $title = "Edit Calon Penerima";
        $cpenerima = Cpenerima::where('nik', $nik)->get();
        return view('cpenerima.edit', compact('title', 'cpenerima'));
    }

    public function update(Request $request)
    {
        Cpenerima::where('nik', $request->nik)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'atap' => $request->atap,
            'lantai' => $request->lantai,
            'dinding' => $request->dinding,
            'tanggungan' => $request->tanggungan,
            'penghasilan' => $request->penghasilan,
            'kepemilikan_rumah' => $request->kepemilikan_rumah,
            'mck' => $request->mck
        ]);

        return redirect('/calon-penerima');
    }
}
