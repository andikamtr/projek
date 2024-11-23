<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Nilai_Siswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $title = "Data Siswa";
        $siswa = Siswa::all();
        $kriteria = Kriteria::all();
        return view('siswa.index', compact('title', 'siswa', 'kriteria'));
    }

    public function tambah(Request $request)
    {
        $validate = $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
        ]);
        $jumlah = count($request->id_kriteria);
        Siswa::create($validate);
        $id_siswa = Siswa::pluck('id_siswa')->last();
        for ($i = 0; $i < $jumlah; $i++) {
            Nilai_Siswa::create([
                'id_siswa' => $id_siswa,
                'id_kriteria' => $request->id_kriteria[$i],
                'nilai' => $request->nilai[$i]
            ]);
        }
        return redirect()->back();
    }

    public function hapus($id)
    {
        Siswa::where('id_siswa', $id)->delete();
        Nilai_Siswa::where('id_siswa', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Data Siswa";
        $siswa = Siswa::where('id_siswa', $id)->get();
        $nilai = Nilai_Siswa::all();
        return view('siswa.edit', compact('title', 'siswa', 'nilai'));
    }

    public function update(Request $request)
    {
        Siswa::where('id_siswa', $request->id_siswa)->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jk' => $request->jk,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
        ]);
        $jumlah = count($request->nilai);
        for ($i = 0; $i < $jumlah; $i++) {
            Nilai_Siswa::where('id_kriteria', $request->id_kriteria[$i])->where('id_siswa', $request->id_siswa)->update([
                'nilai' => $request->nilai[$i]
            ]);
        }

        return redirect('/data-siswa');
    }
}
