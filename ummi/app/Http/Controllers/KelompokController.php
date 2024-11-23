<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function index()
    {
        $title = "Pengelompokan KKN";
        $mahasiswa = Mahasiswa::all();
        $jumlah = Mahasiswa::count();

        foreach ($mahasiswa as $m) {
            $nim[] = $m->nim;
            $nama[] = $m->nama;
            $jurusan[] = $m->jurusan;
            $organisasi[] = $m->organisasi;
            $kompetisi[] = $m->kompetisi;
            $hobi[] = $m->hobi;
        }
        for ($i = 0; $i < $jumlah; $i++) {
            $data[] = ['jurusan' => $jurusan[$i], 'nama' => $nama[$i], 'nim' => $nim[$i], 'org' => $organisasi[$i], 'komp' => $kompetisi[$i], 'hobi' => $hobi[$i]];
        }

        $i = 0;
        $hasil = [];
        // while ($i < $jumlah - 1) {
        //     $cs = array();
        //     for ($loop = $i + 1; $loop < $jumlah; $loop++) {
        //         $cs[] = $this->cosine_similarity($data[$i], $data[$loop]);
        //     }

        //     array_push($hasil, max($cs));
        //     $i++;
        // }
        for ($i = 0; $i < $jumlah - 1; $i++) {
            $cs = array();
            for ($loop = $i + 1; $loop < $jumlah; $loop++) {
                $cs[] = $this->cosine_similarity($data[$i], $data[$loop]);
            }
            array_push($hasil, $cs);
        }
        for ($i = 0; $i < count($hasil); $i++) {
            for ($j = 0; $j < count($hasil[$i]); $j++) {
                $hs[] = $hasil[$i][$j];
            }
        }
        rsort($hs);

        return view('kelompok.index', compact('title', 'hs'));
    }

    public function cosine_similarity(array $a, array $b)
    {
        $nama = [$a['nama'], $b['nama']];
        $jurusan = [$a['jurusan'], $b['jurusan']];
        $nim1 = $a['nim'];
        $nim2 = $b['nim'];

        $cs = ($a['org'] * $b['org']) + ($a['komp'] * $b['komp']) + ($a['hobi'] * $b['hobi']) / sqrt(pow($a['org'], 2) + pow($a['komp'], 2) + pow($a['hobi'], 2)) * sqrt(pow($b['org'], 2) + pow($b['komp'], 2) + pow($b['hobi'], 2));
        return [
            $cs,
            $nim1,
            $nim2,
            $nama,
            $jurusan,
        ];
    }
}
