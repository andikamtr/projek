<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Normal_Bobot;
use App\Models\PerBobot;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    public function index()
    {
        return view('dashboard.bobot.index', [
            'title' => 'Data Bobot'
        ]);
    }

    public function t_bobot(Request $request)
    {
        //Perbandingan Berpasangan
        $jumlah1 = $request->bs[0] + $request->bs[1] + $request->bs[2] + $request->bs[3];
        $jumlah2 = $request->b[0] + $request->b[1] + $request->b[2] + $request->b[3];
        $jumlah3 = $request->c[0] + $request->c[1] + $request->c[2] + $request->c[3];
        $jumlah4 = $request->k[0] + $request->k[1] + $request->k[2] + $request->k[3];
        $jumlah = [$jumlah1, $jumlah2, $jumlah3, $jumlah4];

        //Normalisasi Data
        for ($i = 0; $i < 4; $i++) {
            $normalbs[] = $request->bs[$i] / $jumlah1;
            $normalb[] = $request->b[$i] / $jumlah2;
            $normalc[] = $request->c[$i] / $jumlah3;
            $normalk[] = $request->k[$i] / $jumlah4;
            //Jumlah Normalisasi
            $jumlahnormal[] = $normalbs[$i] + $normalb[$i] + $normalc[$i] + $normalk[$i];
            //Prioritas Normalisasi
            $prioritas[] = $jumlahnormal[$i] / 4;
        }
        for ($i = 0; $i < 4; $i++) {
            $sub_prioritas[] = $prioritas[$i] / max($prioritas[0], $prioritas[1], $prioritas[2], $prioritas[3]);
        }
        //Penjumlahan Per Baris
        for ($i = 0; $i < 4; $i++) {
            $perbarisbs[] = $request->bs[$i] * $prioritas[0];
            $perbarisb[] = $request->b[$i] * $prioritas[1];
            $perbarisc[] = $request->c[$i] * $prioritas[2];
            $perbarisk[] = $request->k[$i] * $prioritas[3];
            //Jumlah Per Baris
            $jumlahperbaris[] = $perbarisbs[$i] + $perbarisb[$i] + $perbarisc[$i] + $perbarisk[$i];
            //Hasil
            $hasil[] = $prioritas[$i] + $jumlahperbaris[$i];
        }

        for ($i = 0; $i < 4; $i++) {
            Bobot::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'bagus_sekali' => $request->bs[$i],
                'bagus' => $request->b[$i],
                'cukup' => $request->c[$i],
                'kurang' => $request->k[$i],
                'jumlah' => $jumlah[$i],
            ]);

            Normal_Bobot::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'bagus_sekali' => $normalbs[$i],
                'bagus' => $normalb[$i],
                'cukup' => $normalc[$i],
                'kurang' => $normalk[$i],
                'jumlah' => $jumlahnormal[$i],
                'prioritas' => $prioritas[$i],
                'sub_prioritas' => $sub_prioritas[$i],
            ]);

            PerBobot::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'bagus_sekali' => $perbarisbs[$i],
                'bagus' => $perbarisb[$i],
                'cukup' => $perbarisc[$i],
                'kurang' => $perbarisk[$i],
                'jumlah' => $jumlahperbaris[$i],
                'hasil' => $hasil[$i],
            ]);
        }

        return redirect('/hasil-bobot');
    }

    public function h_bobot()
    {
        $hasil = PerBobot::jumlah()[0] + PerBobot::jumlah()[1] + PerBobot::jumlah()[2] + PerBobot::jumlah()[3];
        return view('dashboard.bobot.h_bobot', [
            'title' => 'Hasil Bobot',
            'bobot' => Bobot::all(),
            'normalbobot' => Normal_Bobot::all(),
            'perbobot' => PerBobot::all(),
            'jumlah' => $hasil,
        ]);
    }
}
