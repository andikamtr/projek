<?php

namespace App\Http\Controllers;

use App\Models\PerKomitmen;
use App\Models\PerKerjasama;
use App\Models\PerManajemen;
use App\Models\Sub_Komitmen;
use Illuminate\Http\Request;
use App\Models\PerHasilkerja;
use App\Models\Sub_Kerjasama;
use App\Models\Sub_Manajemen;
use App\Models\Sub_Hasilkerja;
use App\Models\Normal_Komitmen;
use App\Models\Normal_Kerjasama;
use App\Models\Normal_Manajemen;
use App\Models\Normal_Hasilkerja;

class Sub_KriteriaController extends Controller
{
    public function index()
    {
        return view('dashboard.sub_kriteria.index', [
            'title' => 'Data Sub Kriteria',
        ]);
    }

    public function t_subkriteria(Request $request)
    {
        //Perbandingan Berpasangan 
        #Sub Komitmen
        $jumlah1  = $request->loyal[0] + $request->loyal[1] + $request->loyal[2] + $request->loyal[3];
        $jumlah2  = $request->jujur[0] + $request->jujur[1] + $request->jujur[2] + $request->jujur[3];
        $jumlah3  = $request->tanggung_jawab[0] + $request->tanggung_jawab[1] + $request->tanggung_jawab[2] + $request->tanggung_jawab[3];
        $jumlah4  = $request->disiplin[0] + $request->disiplin[1] + $request->disiplin[2] + $request->disiplin[3];
        $jumlahkom = [$jumlah1, $jumlah2, $jumlah3, $jumlah4];
        #Sub Manajemen
        $jumlah5 = $request->kepemimpinan[0] + $request->kepemimpinan[1] + $request->kepemimpinan[2] + $request->kepemimpinan[3];
        $jumlah6 = $request->perencanaan[0] + $request->perencanaan[1] + $request->perencanaan[2] + $request->perencanaan[3];
        $jumlah7 = $request->pengorganisasian[0] + $request->pengorganisasian[1] + $request->pengorganisasian[2] + $request->pengorganisasian[3];
        $jumlah8 = $request->pengarahan[0] + $request->pengarahan[1] + $request->pengarahan[2] + $request->pengarahan[3];
        $jumlahman = [$jumlah5, $jumlah6, $jumlah7, $jumlah8];
        #Sub Kerja Sama
        $jumlah9 = $request->kepemimpinan[0] + $request->kepemimpinan[1] + $request->kepemimpinan[2] + $request->kepemimpinan[3];
        $jumlah10 = $request->perencanaan[0] + $request->perencanaan[1] + $request->perencanaan[2] + $request->perencanaan[3];
        $jumlah11 = $request->pengorganisasian[0] + $request->pengorganisasian[1] + $request->pengorganisasian[2] + $request->pengorganisasian[3];
        $jumlahker = [$jumlah9, $jumlah10, $jumlah11];
        #Sub Hasil Kerja
        $jumlah12 = $request->kepemimpinan[0] + $request->kepemimpinan[1] + $request->kepemimpinan[2] + $request->kepemimpinan[3];
        $jumlah13 = $request->perencanaan[0] + $request->perencanaan[1] + $request->perencanaan[2] + $request->perencanaan[3];
        $jumlahhas = [$jumlah12, $jumlah13];
        //Normalisasi Data
        for ($i = 0; $i < 4; $i++) {
            #Data Normalisasi Sub Komitmen
            $normalloyal[] = $request->loyal[$i] / $jumlah1;
            $normaljujur[] = $request->jujur[$i] / $jumlah2;
            $normaltanggung_jawab[] = $request->tanggung_jawab[$i] / $jumlah3;
            $normaldisiplin[] = $request->disiplin[$i] / $jumlah4;

            #Data Normalisasi Sub Manajemen
            $normalkepemimpinan[] = $request->kepemimpinan[$i] / $jumlah5;
            $normalperencanaan[] = $request->perencanaan[$i] / $jumlah6;
            $normalpengorganisasian[] = $request->pengorganisasian[$i] / $jumlah7;
            $normalpengarahan[] = $request->pengarahan[$i] / $jumlah8;

            //Jumlah Normalisasi Sub Komitmen
            $jumlahnormalkom[] = $normalloyal[$i] + $normaljujur[$i] + $normaltanggung_jawab[$i] + $normaldisiplin[$i];
            $jumlahnormalman[] = $normalkepemimpinan[$i] + $normalperencanaan[$i] + $normalpengorganisasian[$i] + $normalpengarahan[$i];

            //Prioritas Sub Komitmen
            $prioritaskom[] = $jumlahnormalkom[$i] / 4;
            $prioritasman[] = $jumlahnormalkom[$i] / 4;
        }

        for ($i = 0; $i < 3; $i++) {
            #Data Normalisasi Sub Kerja Sama
            $normalkomunikasi[] = $request->komunikasi[$i] / $jumlah9;
            $normalberadaptasi[] = $request->jujur[$i] / $jumlah10;
            $normalberbagi_informasi[] = $request->berbagi_informasi[$i] / $jumlah11;
            #Jumlah Sub Kerja Sama
            $jumlahnormalker[] = $normalkomunikasi[$i] + $normalberadaptasi[$i] + $normalberbagi_informasi[$i];
            #Prioritas Sub Kerja Sama
            $prioritasker[] = $jumlahnormalkom[$i] / 3;
        }

        for ($i = 0; $i < 2; $i++) {
            #Data Normalisasi Sub Hasil Kerja
            $normalkualitas[] = $request->kualitas[$i] / $jumlah12;
            $normalkuantitas[] = $request->kuantitas[$i] / $jumlah13;
            #Jumlah Sub Hasil Kerja
            $jumlahnormalhas[] = $normalkualitas[$i] + $normalkuantitas[$i];
            #Prioritas Sub Hasil Kerja
            $prioritashas[] = $jumlahnormalhas[$i] / 2;
        }

        for ($i = 0; $i < 4; $i++) {
            #Sub Prioritas Sub Komitmen
            $subprioritaskom[] = $prioritaskom[$i] / max($prioritaskom[0], $prioritaskom[1], $prioritaskom[2], $prioritaskom[3]);
            #Sub Prioritas Sub Manajemen
            $subprioritasman[] = $prioritasman[$i] / max($prioritasman[0], $prioritasman[1], $prioritasman[2], $prioritasman[3]);
        }

        for ($i = 0; $i < 3; $i++) {
            #Prioritas Sub Kerja Sama
            $subprioritasker[] = $prioritasker[$i] / max($prioritasker[0], $prioritasker[1], $prioritasker[2]);
        }

        for ($i = 0; $i < 2; $i++) {
            #Prioritas Sub Hasil Kerja
            $subprioritashas[] = $prioritashas[$i] / max($prioritashas[0], $prioritashas[1]);
        }

        //Penjumlahan Per Baris
        for ($i = 0; $i < 4; $i++) {
            #Penjumlahan Per Baris Sub Komitmen
            $perbarisloyal[] = $request->loyal[$i] * $prioritaskom[0];
            $perbarisjujur[] = $request->jujur[$i] * $prioritaskom[1];
            $perbaristanggung_jawab[] = $request->tanggung_jawab[$i] * $prioritaskom[2];
            $perbarisdisiplin[] = $request->disiplin[$i] * $prioritaskom[3];
            #Penjumlahan Per Baris Sub Manajemen
            $perbariskepemimpinan[] = $request->kepemimpinan[$i] * $prioritasman[0];
            $perbarisperencanaan[] = $request->perencanaan[$i] * $prioritasman[1];
            $perbarispengorganisasian[] = $request->pengorganisasian[$i] * $prioritasman[2];
            $perbarispengarahan[] = $request->pengarahan[$i] * $prioritasman[3];

            #Jumlah Per Baris Sub Komitmen
            $jumlahperbariskom[] = $perbarisloyal[$i] + $perbarisjujur[$i] + $perbaristanggung_jawab[$i] + $perbarisdisiplin[$i];
            #Jumlah Per Baris Sub Manajemen
            $jumlahperbarisman[] = $perbariskepemimpinan[$i] + $perbarisperencanaan[$i] + $perbarispengorganisasian[$i] + $perbarispengarahan[$i];

            //Hasil Sub Komitmen
            $hasilkom[] = $prioritaskom[$i] + $jumlahperbariskom[$i];
            //Hasil Sub Manajemen
            $hasilman[] = $prioritasman[$i] + $jumlahperbarisman[$i];
        }

        for ($i = 0; $i < 3; $i++) {
            #Penjumlahan Per Baris Sub Kerja Sama
            $perbariskomunikasi[] = $request->komunikasi[$i] * $prioritasker[0];
            $perbarisberadaptasi[] = $request->beradaptasi[$i] * $prioritasker[1];
            $perbarisberbagi_informasi[] = $request->berbagi_informasi[$i] * $prioritasker[2];
            #Jumlah Per Baris Sub Kerja Sama
            $jumlahperbarisker[] = $perbariskomunikasi[$i] + $perbarisberadaptasi[$i] + $perbarisberbagi_informasi[$i];
            #Hasil Sub Kerja Sama
            $hasilker[] = $prioritasker[$i] = $jumlahperbarisker[$i];
        }

        for ($i = 0; $i < 2; $i++) {
            #Penjumlahan Per Baris Sub Hasil Kerja
            $perbariskualitas[] = $request->kualitas[$i] * $prioritashas[0];
            $perbariskuantitas[] = $request->kuantitas[$i] * $prioritashas[1];
            #Jumlah Per Baris Sub Hasil Kerja
            $jumlahperbarishas[] = $perbariskualitas[$i] + $perbariskuantitas[$i];
            #Hasil Sub Hasil Kerja
            $hasilhas[] = $prioritashas[$i] = $jumlahperbarishas[$i];
        }


        //Sub Komitmen
        for ($i = 0; $i < 4; $i++) {
            Sub_Komitmen::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu1[$i],
                'loyal' => $request->loyal[$i],
                'jujur' => $request->jujur[$i],
                'tanggung_jawab' => $request->tanggung_jawab[$i],
                'disiplin' => $request->disiplin[$i],
                'jumlah' => $jumlahkom[$i],
            ]);

            Normal_Komitmen::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu1[$i],
                'loyal' => $normalloyal[$i],
                'jujur' => $normaljujur[$i],
                'tanggung_jawab' => $normaltanggung_jawab[$i],
                'disiplin' => $normaldisiplin[$i],
                'jumlah' => $jumlahnormalkom[$i],
                'prioritas' => $prioritaskom[$i],
                'sub_prioritas' => $subprioritaskom[$i],
            ]);

            PerKomitmen::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu1[$i],
                'loyal' => $perbarisloyal[$i],
                'jujur' => $perbarisjujur[$i],
                'tanggung_jawab' => $perbaristanggung_jawab[$i],
                'disiplin' => $perbarisdisiplin[$i],
                'jumlah' => $jumlahperbariskom[$i],
                'hasil' => $hasilkom[$i],
            ]);

            //Sub Manajemen
            Sub_Manajemen::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu2[$i],
                'kepemimpinan' => $request->kepemimpinan[$i],
                'perencanaan' => $request->perencanaan[$i],
                'pengorganisasian' => $request->pengorganisasian[$i],
                'pengarahan' => $request->pengarahan[$i],
                'jumlah' => $jumlahman[$i],
            ]);

            Normal_Manajemen::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu2[$i],
                'kepemimpinan' => $normalkepemimpinan[$i],
                'perencanaan' => $normalperencanaan[$i],
                'pengorganisasian' => $normalpengorganisasian[$i],
                'pengarahan' => $normalpengarahan[$i],
                'jumlah' => $jumlahnormalman[$i],
                'prioritas' => $prioritasman[$i],
                'sub_prioritas' => $subprioritasman[$i],
            ]);

            PerManajemen::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu2[$i],
                'kepemimpinan' => $perbariskepemimpinan[$i],
                'perencanaan' => $perbarisperencanaan[$i],
                'pengorganisasian' => $perbarispengorganisasian[$i],
                'pengarahan' => $perbarispengarahan[$i],
                'jumlah' => $jumlahperbarisman[$i],
                'hasil' => $hasilman[$i],
            ]);
        }

        for ($i = 0; $i < 3; $i++) {
            //Sub Kerja Sama
            Sub_Kerjasama::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu3[$i],
                'komunikasi' => $request->komunikasi[$i],
                'beradaptasi' => $request->beradaptasi[$i],
                'berbagi_informasi' => $request->berbagi_informasi[$i],
                'jumlah' => $jumlahker[$i],
            ]);

            Normal_Kerjasama::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu3[$i],
                'komunikasi' => $normalkomunikasi[$i],
                'beradaptasi' => $normalberadaptasi[$i],
                'berbagi_informasi' => $normalberbagi_informasi[$i],
                'jumlah' => $jumlahnormalker[$i],
                'prioritas' => $prioritasker[$i],
                'sub_prioritas' => $subprioritasker[$i],
            ]);

            PerKerjasama::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu3[$i],
                'komunikasi' => $perbariskomunikasi[$i],
                'beradaptasi' => $perbarisberadaptasi[$i],
                'berbagi_informasi' => $perbarisberbagi_informasi[$i],
                'jumlah' => $jumlahperbarisker[$i],
                'hasil' => $hasilker[$i],
            ]);
        }

        for ($i = 0; $i < 2; $i++) {
            //Sub Kerja Hasil
            Sub_Hasilkerja::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu4[$i],
                'kualitas' => $request->kualitas[$i],
                'kuantitas' => $request->kuantitas[$i],
                'jumlah' => $jumlahhas[$i],
            ]);

            Normal_Hasilkerja::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu4[$i],
                'kualitas' => $normalkualitas[$i],
                'kuantitas' => $normalkuantitas[$i],
                'jumlah' => $jumlahnormalhas[$i],
                'prioritas' => $prioritashas[$i],
                'sub_prioritas' => $subprioritashas[$i],
            ]);

            PerHasilkerja::where('id', $request->id[$i])->update([
                'menu_id' => $request->menu4[$i],
                'kualitas' => $perbariskualitas[$i],
                'kuantitas' => $perbariskuantitas[$i],
                'jumlah' => $jumlahperbarishas[$i],
                'hasil' => $hasilhas[$i],
            ]);
        }

        return redirect('/hasil-sub-kriteria');
    }

    public function h_subkriteria()
    {
        $hasil1 = PerKomitmen::jumlah()[0] + PerKomitmen::jumlah()[1] + PerKomitmen::jumlah()[2] + PerKomitmen::jumlah()[3];
        $hasil2 = PerManajemen::jumlah()[0] + PerManajemen::jumlah()[1] + PerManajemen::jumlah()[2] + PerManajemen::jumlah()[3];
        $hasil3 = PerKerjasama::jumlah()[0] + PerKerjasama::jumlah()[1] + PerKerjasama::jumlah()[2] + PerKerjasama::jumlah()[3];
        $hasil4 = PerHasilkerja::jumlah()[0] + PerHasilkerja::jumlah()[1] + PerHasilkerja::jumlah()[2] + PerHasilkerja::jumlah()[3];
        return view('dashboard.sub_kriteria.h_subkriteria', [
            'title' => 'Hasil Sub Kriteria',
            #Sub Komitmen
            'komitmen' => Sub_Komitmen::all(),
            'normalkomitmen' => Normal_Komitmen::all(),
            'perkomitmen' => PerKomitmen::all(),
            'jumlahkom' => $hasil1,
            #Sub Manajemen
            'manajemen' => Sub_Manajemen::all(),
            'normalmanajemen' => Normal_Manajemen::all(),
            'permanajemen' => PerManajemen::all(),
            'jumlahman' => $hasil2,
            #Sub Kerja Sama
            'kerjasama' => Sub_Kerjasama::all(),
            'normalkerjasama' => Normal_Kerjasama::all(),
            'perkerjasama' => PerKerjasama::all(),
            'jumlahker' => $hasil3,
            #Sub Hasil Kerja
            'hasilkerja' => Sub_Hasilkerja::all(),
            'normalhasilkerja' => Normal_Hasilkerja::all(),
            'perhasilkerja' => PerHasilkerja::all(),
            'jumlahhas' => $hasil4,

        ]);
    }
}
