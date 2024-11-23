<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    public function index()
    {
        $title = "Gejala";
        $gejala = Gejala::all();
        $pertanyaan = DB::table('pertanyaans')->get();
        return view('dashboard.gejala.index', [
            'title' => $title,
            'gejala' => $gejala,
            'pertanyaan' => $pertanyaan
        ]);
    }

    public function tambah(Request $request)
    {
        Gejala::create([
            'gejala' => $request->gejala,
            'pertanyaan_awal' => $request->pertanyaan_awal,
            'kd_gejala' => $request->kd_gejala,
        ]);

        return redirect('/gejala');
    }

    public function edit($id)
    {
        $title = "Edit";
        $gejala = DB::table('gejalas')->where('id_gejala', $id)->get();
        $pertanyaan = DB::table('pertanyaans')->get();
        return view('dashboard.gejala.edit', [
            'title' => $title,
            'gejala' => $gejala,
            'pertanyaan' => $pertanyaan
        ]);
    }

    public function update($id, Request $request)
    {
        DB::table('gejalas')->where('id_gejala', $id)->update([
            'gejala' => $request->gejala,
            'pertanyaan_awal' => $request->pertanyaan_awal,
            'kd_gejala' => $request->kd_gejala,
        ]);

        return redirect('/gejala');
    }

    public function hapus($id)
    {
        DB::table('gejalas')->where('id_gejala', $id)->delete();
        return redirect('/gejala');
    }
}
