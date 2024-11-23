<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\PerKriteria;
use Illuminate\Http\Request;
use App\Models\normal_kriteria;

class KriteriaController extends Controller
{
    public function index()
    {
        return view('dashboard.kriteria.index', [
            'title' => 'Data Kriteria'
        ]);
    }

    public function t_kriteria(Request $request)
    {
        //Perbandingan Berpasangan
        $jumlah1 = $request->komitmen[0] + $request->komitmen[1] + $request->komitmen[2] + $request->komitmen[3];
        $jumlah2 = $request->manajemen[0] + $request->manajemen[1] + $request->manajemen[2] + $request->manajemen[3];
        $jumlah3 = $request->kerja_sama[0] + $request->kerja_sama[1] + $request->kerja_sama[2] + $request->kerja_sama[3];
        $jumlah4 = $request->hasil_kerja[0] + $request->hasil_kerja[1] + $request->hasil_kerja[2] + $request->hasil_kerja[3];
        $jumlah = [$jumlah1, $jumlah2, $jumlah3, $jumlah4];
        //Normalisasi Data
        for ($i = 0; $i < 4; $i++) {
            $normalkomitmen[] = $request->komitmen[$i] / $jumlah1;
            $normalmanajemen[] = $request->manajemen[$i] / $jumlah2;
            $normalkerjasama[] = $request->kerja_sama[$i] / $jumlah3;
            $normalhasilkerja[] = $request->hasil_kerja[$i] / $jumlah4;
            //Jumlah Normalisasi
            $jumlahnormal[] = $normalkomitmen[$i] + $normalmanajemen[$i] + $normalkerjasama[$i] + $normalhasilkerja[$i];
            //Prioritas Normalisasi
            $prioritas[] = $jumlahnormal[$i] / 4;
        }
        //Penjumlahan Per Baris
        for ($i = 0; $i < 4; $i++) {
            $perbariskomitmen[] = $request->komitmen[$i] * $prioritas[0];
            $perbarismanajemen[] = $request->manajemen[$i] * $prioritas[1];
            $perbariskerjasama[] = $request->kerja_sama[$i] * $prioritas[2];
            $perbarishasilkerja[] = $request->hasil_kerja[$i] * $prioritas[3];
            //Jumlah Per Baris
            $jumlahperbaris[] = $perbariskomitmen[$i] + $perbarismanajemen[$i] + $perbariskerjasama[$i] + $perbarishasilkerja[$i];
            //Hasil
            $hasil[] = $prioritas[$i] + $jumlahperbaris[$i];
        }
        for ($i = 0; $i < 4; $i++) {
            Kriteria::where('id', $request->menu_id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'komitmen' => $request->komitmen[$i],
                'manajemen' => $request->manajemen[$i],
                'kerja_sama' => $request->kerja_sama[$i],
                'hasil_kerja' => $request->hasil_kerja[$i],
                'jumlah' => $jumlah[$i],
            ]);

            normal_kriteria::where('id', $request->menu_id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'komitmen' => $normalkomitmen[$i],
                'manajemen' => $normalmanajemen[$i],
                'kerja_sama' => $normalkerjasama[$i],
                'hasil_kerja' => $normalhasilkerja[$i],
                'jumlah' => $jumlahnormal[$i],
                'prioritas' => $prioritas[$i],
            ]);

            PerKriteria::where('id', $request->menu_id[$i])->update([
                'menu_id' => $request->menu_id[$i],
                'komitmen' => $perbariskomitmen[$i],
                'manajemen' => $perbarismanajemen[$i],
                'kerja_sama' => $perbariskerjasama[$i],
                'hasil_kerja' => $perbarishasilkerja[$i],
                'hasil_kerja' => $perbarishasilkerja[$i],
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
            'normalkriteria' => normal_kriteria::all(),
            'perbaris' => PerKriteria::all(),
            'jumlah' => $hasil,
        ]);
    }
}
