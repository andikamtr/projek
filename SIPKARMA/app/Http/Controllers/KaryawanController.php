<?php

namespace App\Http\Controllers;

use App\Models\DataKaryawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('dashboard.karyawan.index', [
            'title' => 'Data Karyawan',
            'data' => DataKaryawan::all(),
        ]);
    }

    public function t_karyawan(Request $request)
    {
        DataKaryawan::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'awal_bekerja' => $request->awal_bekerja,
            'masa_kerja' => $request->masa_kerja,
            'status' => $request->status,
        ]);

        return redirect('/data-karyawan');
    }
}
