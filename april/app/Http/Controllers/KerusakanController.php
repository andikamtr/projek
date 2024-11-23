<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    public function index()
    {
        $title = "Kerusakan";
        $kerusakan = Kerusakan::all();
        $kerusakans = Kerusakan::all()->last();
        if ($kerusakans == null) {
            $init = 'K';
            $val = '1';
            $sku_kode = $init . $val;
        } else {
            $key = $kerusakans->kd_kerusakan;
            $pattern = "/(\d+)/";
            $array = preg_split($pattern, $key, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
            $inisial = $array[0];
            $code = $array[1] += 1;
            $sku_kode = $inisial . $code;
        }
        return view('kerusakan.index', compact('title', 'kerusakan', 'sku_kode'));
    }

    public function tambah(Request $request)
    {
        Kerusakan::create([
            'kd_kerusakan' => $request->kd_kerusakan,
            'kerusakan' => $request->kerusakan,
            'solusi' => $request->solusi,
        ]);

        return redirect('/kerusakan');
    }

    public function edit($id)
    {
        $title = "Edit";
        $kerusakan = Kerusakan::where('id', $id)->get();
        return view('kerusakan.edit', compact('title', 'kerusakan'));
    }

    public function update(Request $request)
    {
        Kerusakan::where('id', $request->id)->update([
            'kd_kerusakan' => $request->kd_kerusakan,
            'kerusakan' => $request->kerusakan,
            'solusi' => $request->solusi,
        ]);

        return redirect('/kerusakan');
    }

    public function hapus($id)
    {
        Kerusakan::where('id', $id)->delete();
        return redirect('/kerusakan');
    }
}
