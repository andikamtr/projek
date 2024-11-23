<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $title = "Gejala";
        $gejala = Gejala::all();
        return view('gejala.index', [
            'title' => $title,
            'gejala' => $gejala
        ]);
    }

    public function tambah(Request $request)
    {
        Gejala::create([
            'kd_gejala' => $request->kd_gejala,
            'gejala' => $request->gejala
        ]);

        return redirect('/gejala');
    }

    public function hapus($id)
    {
        Gejala::where('id', $id)->delete();
        return redirect('/gejala');
    }
}
