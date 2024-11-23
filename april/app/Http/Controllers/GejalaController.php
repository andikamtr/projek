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
        $gejalas = Gejala::all()->last();
        if ($gejalas == null) {
            $init = 'G';
            $val = '1';
            $sku_kode = $init . $val;
        } else {
            $key = $gejalas->kd_gejala;
            $pattern = "/(\d+)/";
            $array = preg_split($pattern, $key, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
            $inisial = $array[0];
            $code = $array[1] += 1;
            $sku_kode = $inisial . $code;
        }
        return view('gejala.index', compact('title', 'gejala', 'sku_kode'));
    }

    public function tambah(Request $request)
    {
        Gejala::create([
            'kd_gejala' => $request->kd_gejala,
            'gejala' => $request->gejala,
            'solusi' => $request->solusi,
        ]);

        return redirect('/gejala');
    }

    public function edit($id)
    {
        $title = "Edit";
        $gejala = Gejala::where('id', $id)->get();
        return view('gejala.edit', compact('title', 'gejala'));
    }

    public function update(Request $request)
    {
        Gejala::where('id', $request->id)->update([
            'kd_gejala' => $request->kd_gejala,
            'gejala' => $request->gejala,
            'solusi' => $request->solusi,
        ]);

        return redirect('/gejala');
    }

    public function hapus($id)
    {
        Gejala::where('id', $id)->delete();
        return redirect('/gejala');
    }
}
