<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $title = "Pertanyaan";
        $pertanyaan = Pertanyaan::gejala();
        $gejala = DB::table('gejalas')->get();
        return view('dashboard.pertanyaan.index', [
            'title' => $title,
            'pertanyaan' => $pertanyaan,
            'gejala' => $gejala,
        ]);
    }

    public function tambah(Request $request)
    {
        Pertanyaan::create([
            'pertanyaan' => $request->pertanyaan,
            'kd_gejala' => $request->kd_gejala,
            'kd_pertanyaan' => $request->kd_pertanyaan,
            'ya' => $request->ya,
            'tidak' => $request->tidak,
        ]);

        return redirect('/pertanyaan');
    }

    public function edit($id)
    {
        $title = "Edit";
        $pertanyaan = DB::table('pertanyaans')->where('id_pertanyaan', $id)->get();
        $gejala = DB::table('gejalas')->get();
        return view('dashboard.pertanyaan.edit', [
            'title' => $title,
            'pertanyaan' => $pertanyaan,
            'gejala' => $gejala,
        ]);
    }

    public function update($id, Request $request)
    {
        DB::table('pertanyaans')->where('id_pertanyaan', $id)->update([
            'pertanyaan' => $request->pertanyaan,
            'kd_gejala' => $request->kd_gejala,
            'kd_pertanyaan' => $request->kd_pertanyaan,
            'ya' => $request->ya,
            'tidak' => $request->tidak,
        ]);

        return redirect('/pertanyaan');
    }

    public function hapus($id)
    {
        DB::table('pertanyaans')->where('id_pertanyaan', $id)->delete();
        return redirect('/pertanyaan');
    }
}
