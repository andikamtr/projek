<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolusiController extends Controller
{
    public function index()
    {
        $title = "Solusi";
        $solusi = DB::table('solusis')->get();
        return view('dashboard.solusi.index', [
            'title' => $title,
            'solusi' => $solusi
        ]);
    }

    public function tambah(Request $request)
    {
        Solusi::create([
            'solusi' => $request->solusi,
            'kd_solusi' => $request->kd_solusi,
        ]);

        return redirect('/solusi');
    }

    public function edit($id)
    {
        $title = "Edit";
        $solusi = DB::table('solusis')->where('id_solusi', $id)->get();
        return view('dashboard.solusi.edit', [
            'title' => $title,
            'solusi' => $solusi
        ]);
    }

    public function update($id, Request $request)
    {
        DB::table('solusis')->where('id_solusi', $id)->update([
            'solusi' => $request->solusi,
            'kd_solusi' => $request->kd_solusi,
        ]);

        return redirect('/solusi');
    }

    public function hapus($id)
    {
        DB::table('solusis')->where('id_solusi', $id)->delete();
        return redirect('/solusi');
    }
}
