<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Gejala;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        $title = "Diagnosa";
        $gejala = Gejala::all();
        return view('diagnosa.index', compact('title', 'gejala'));
    }

    public function fc(Request $request)
    {
        $title = "Hasil";
        $id = $request->id;
        $rows = [];
        foreach ($id as $key => $v) {
            array_push($rows, [
                'id' => $id[$key]
            ]);
        }

        foreach ($rows as $k => $value) {
            $tes = Rule::where('id_gejala', [$value['id']])->get();
            foreach ($tes as $ke => $v) {
                $kerusakan = $v->kerusakan->kerusakan;
                $solusi = $v->kerusakan->solusi;
            }
        }
        return view('diagnosa.hasil', compact('title', 'kerusakan', 'solusi'));
    }
}
