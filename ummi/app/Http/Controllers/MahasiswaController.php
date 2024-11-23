<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $title = "Data Mahasiswa";
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('title', 'mahasiswa'));
    }

    public function tambah(Request $request)
    {
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'asal' => $request->asal,
            'jurusan' => $request->jurusan,
            'jk' => $request->jk,
            'organisasi' => $request->organisasi,
            'kompetisi' => $request->kompetisi,
            'hobi' => $request->hobi,
        ]);

        return redirect('/mahasiswa');
    }

    public function hapus($nim)
    {
        Mahasiswa::where('nim', $nim)->delete();
        return redirect('/mahasiswa');
    }
}
