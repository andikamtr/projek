<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\NormalKriteria;
use App\Models\PerKriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        return view('dashboard.kriteria.d_kriteria', [
            'title' => 'Data Kriteria'
        ]);
    }

    public function tb_kriteria(Request $request)
    {
        //Perbandingan Berpasangan
        $jumlah1 = $request->pendidikan[0] + $request->pendidikan[1] + $request->pendidikan[2] + $request->pendidikan[3];
        $jumlah2 = $request->absensi[0] + $request->absensi[1] + $request->absensi[2] + $request->absensi[3];
        $jumlah3 = $request->kedisiplinan[0] + $request->kedisiplinan[1] + $request->kedisiplinan[2] + $request->kedisiplinan[3];
        $jumlah4 = $request->prestasi[0] + $request->prestasi[1] + $request->prestasi[2] + $request->prestasi[3];
        $jumlah = [$jumlah1, $jumlah2, $jumlah3, $jumlah4];

        //Normalisasi Data
        for ($i = 0; $i < 4; $i++) {
            $normalpendidikan[] = $request->pendidikan[$i] / $jumlah1;
            $normalabsensi[] = $request->absensi[$i] / $jumlah2;
            $normalkedisiplinan[] = $request->kedisiplinan[$i] / $jumlah3;
            $normalprestasi[] = $request->prestasi[$i] / $jumlah4;
            //Jumlah Normalisasi
            $jumlahnormal[] = $normalpendidikan[$i] + $normalabsensi[$i] + $normalkedisiplinan[$i] + $normalprestasi[$i];
            //Prioritas Normalisasi
            $prioritas[] = $jumlahnormal[$i] / 4;
        }
        //Penjumlahan Per Baris
        for ($i = 0; $i < 4; $i++) {
            $perbarispendidikan[] = $request->pendidikan[$i] * $prioritas[0];
            $perbarisabsensi[] = $request->absensi[$i] * $prioritas[1];
            $perbariskedisiplinan[] = $request->kedisiplinan[$i] * $prioritas[2];
            $perbarisprestasi[] = $request->prestasi[$i] * $prioritas[3];
            //Jumlah Per Baris
            $jumlahperbaris[] = $perbarispendidikan[$i] + $perbarisabsensi[$i] + $perbariskedisiplinan[$i] + $perbarisprestasi[$i];
            //Hasil
            $hasil[] = $prioritas[$i] + $jumlahperbaris[$i];
        }
        for ($i = 0; $i < 4; $i++) {
            Kriteria::where('id', $request->menu_id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'pendidikan' => $request->pendidikan[$i],
                'absensi' => $request->absensi[$i],
                'kedisiplinan' => $request->kedisiplinan[$i],
                'prestasi' => $request->prestasi[$i],
                'jumlah' => $jumlah[$i],
            ]);

            NormalKriteria::where('id', $request->menu_id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'pendidikan' => $normalpendidikan[$i],
                'absensi' => $normalabsensi[$i],
                'kedisiplinan' => $normalkedisiplinan[$i],
                'prestasi' => $normalprestasi[$i],
                'jumlah' => $jumlahnormal[$i],
                'prioritas' => $prioritas[$i],
            ]);

            PerKriteria::where('id', $request->menu_id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'pendidikan' => $perbarispendidikan[$i],
                'absensi' => $perbarisabsensi[$i],
                'kedisiplinan' => $perbariskedisiplinan[$i],
                'prestasi' => $perbarisprestasi[$i],
                'jumlah' => $jumlahperbaris[$i],
                'hasil' => $hasil[$i],
            ]);
        }
        return redirect('/hasil-kriteria');
    }

    public function h_kriteria()
    {
        $hasil = PerKriteria::jumlah()[0] + PerKriteria::jumlah()[1] + PerKriteria::jumlah()[2] + PerKriteria::jumlah()[3];
        return view('dashboard.kriteria.h_kriteria', [
            'title' => 'Hasil Kriteria',
            'kriteria' => Kriteria::all(),
            'normalkriteria' => NormalKriteria::all(),
            'perbaris' => PerKriteria::all(),
            'jumlah' => $hasil,
        ]);
    }
}
