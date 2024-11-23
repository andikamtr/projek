<?php

namespace App\Http\Controllers;

use App\Models\Himpunan;
use App\Models\Kriteria;
use App\Models\Nilai_Siswa;
use App\Models\Rule;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        $title = "Perhitungan";
        $siswas = Siswa::all();
        $himpunans = Himpunan::all();
        $nilais = Nilai_Siswa::all();
        $kriterias = Kriteria::all();
        $rules = Rule::all();
        $temp = [];

        foreach ($siswas as $siswa) {
            // Matriks Nilai
            foreach ($nilais->where('id_siswa', $siswa->id_siswa) as $nilai) {
                $nil = [
                    "Rendah" => [],
                    "Tinggi" => [],
                ];
                foreach ($himpunans as $himpunan) {
                    if ($nilai->nilai <= $himpunan->batas_nilai && $himpunan->nama_himpunan == "Rendah") {
                        $nil['Rendah'][] = 1;
                        $nil['Tinggi'][] = 0;
                    } elseif ($nilai->nilai >= $himpunan->batas_nilai && $himpunan->nama_himpunan == "Tinggi") {
                        $nil['Rendah'][] = 0;
                        $nil['Tinggi'][] = 1;
                    } else {
                        if ($himpunan->nama_himpunan == "Rendah") {
                            $nil['Rendah'][] = (100 - $nilai->nilai) / (100 - 20);
                        } else {
                            $nil['Tinggi'][] = ($nilai->nilai - 20) / (100 - 20);
                        }
                    }
                }

                $derajat_keanggotaan = [
                    'Rendah' => [max($nil['Rendah']), "Rendah"],
                    'Tinggi' => [max($nil['Tinggi']), "Tinggi"],
                ];
                dd($derajat_keanggotaan);
            }
        }



        return view('perhitungan.index', compact('title', 'defuzzified_results'));
    }
}
