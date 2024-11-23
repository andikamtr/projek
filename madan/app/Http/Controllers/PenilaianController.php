<?php

namespace App\Http\Controllers;

use App\Models\Cpenerima;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $title = "Penilaian";
        $kriteria = Kriteria::all();
        $cpenerima = Cpenerima::all();
        $jumlah = Cpenerima::count();
        foreach ($kriteria as $n => $v) {
            $nilai[] = $v['nilai'];
        }
        foreach ($cpenerima as $c) {
            $nik[] = $c->nik;
            $nama[] = $c->nama;
            $atap[] = $c->atap;
            $lantai[] = $c->lantai;
            $dinding[] = $c->dinding;
            $tanggungan[] = $c->tanggungan;
            $penghasilan[] = $c->penghasilan;
            $kepemilikan_rumah[] = $c->kepemilikan_rumah;
            $mck[] = $c->mck;
        }
        $minatap = min($atap);
        $minlantai = min($lantai);
        $mindinding = min($dinding);
        $maxtanggungan = max($tanggungan);
        $minpenghasilan = min($penghasilan);
        $minkepemilikan_rumah = min($kepemilikan_rumah);
        $minmck = min($mck);

        for ($i = 0; $i < $jumlah; $i++) {
            $ev[] = (($minatap / $atap[$i]) * $nilai[0]) + (($minlantai / $lantai[$i]) * $nilai[1]) + (($mindinding / $dinding[$i]) * $nilai[2]) + (($tanggungan[$i] / $maxtanggungan) * $nilai[3]) + (($minpenghasilan / $penghasilan[$i]) * $nilai[4]) + (($minkepemilikan_rumah / $kepemilikan_rumah[$i]) * $nilai[5]) + (($minmck / $mck[$i]) * $nilai[6]);

            $hasil[] = ['ev' =>  $ev[$i], 'nama' =>  $nama[$i], 'nik' => $nik[$i]];
            rsort($hasil);
        }
        return view('penilaian.index', compact('title', 'hasil'));
    }
}
