<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Rule;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index()
    {
        $title = "Rule";
        $rule = Rule::all();
        $gejala = Gejala::all();
        $kerusakan = Kerusakan::all();
        return view('rule.index', compact('title', 'rule', 'gejala', 'kerusakan'));
    }

    public function tambah(Request $request)
    {
        Rule::create([
            'id_gejala' => $request->id_gejala,
            'id_kerusakan' => $request->id_kerusakan,
        ]);

        return redirect('/rule');
    }

    public function edit($id)
    {
        $title = "Edit";
        $rule = Rule::where('id', $id)->get();
        $gejala = Gejala::all();
        $kerusakan = Kerusakan::all();
        return view('rule.edit', compact('title', 'rule', 'gejala', 'kerusakan'));
    }

    public function update(Request $request)
    {
        Gejala::where('id', $request->id)->update([
            'id_gejala' => $request->id_gejala,
            'id_kerusakan' => $request->id_kerusakan,
        ]);

        return redirect('/rule');
    }

    public function hapus($id)
    {
        Gejala::where('id', $id)->delete();
        return redirect('/rule');
    }
}
