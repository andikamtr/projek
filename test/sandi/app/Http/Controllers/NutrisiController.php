<?php

namespace App\Http\Controllers;

use App\Models\Nutrisi;
use Illuminate\Http\Request;

class NutrisiController extends Controller
{
    public function index()
    {
        $title = "Defisiensi Nutrisi";
        $nutrisi = Nutrisi::all();
        return view('nutrisi.index', [
            'title' => $title,
            'nutrisi' => $nutrisi,
        ]);
    }

    public function tambah(Request $request)
    {
        Nutrisi::create([
            'kd_nutrisi' => $request->kd_nutrisi,
            'nutrisi' => $request->nutrisi,
            'ket' => $request->ket
        ]);

        return redirect('/nutrisi');
    }

    public function hapus($id)
    {
        Nutrisi::where('id', $id)->delete();
        return redirect('/nutrisi');
    }
}
