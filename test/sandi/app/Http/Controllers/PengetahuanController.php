<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Nutrisi;
use App\Models\Pengetahuan;
use Illuminate\Http\Request;

class PengetahuanController extends Controller
{
    public function index()
    {
        $title = "Basis Pengetahuan";
        $pengetahuan = Pengetahuan::all();
        $gejala = Gejala::all();
        $nutrisi = Nutrisi::all();
        return view('pengetahuan.index', [
            'title' => $title,
            'pengetahuan' => $pengetahuan,
            'gejala' => $gejala,
            'nutrisi' => $nutrisi,
        ]);
    }

    public function tambah(Request $request)
    {
        Pengetahuan::create([
            'get_gejala' => $request->get_gejala,
            'get_defisiensi' => $request->get_defisiensi,
            'nilai_cf' => $request->nilai_cf,
        ]);

        return redirect('/pengetahuan');
    }

    public function hapus($id)
    {
        Pengetahuan::where('id', $id)->delete();
        return redirect('/pengetahuan');
    }
}
