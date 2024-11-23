@extends('layout.main')

@section('container')

<div class="row">
    <div class="col-12">
        <form action="/sub-kriteria" method="post">
            @csrf
            @for($i=1;$i <= 4; $i++) <input type="hidden" name="id[]" value="{{ $i }}">
                @endfor
                @for($i=5;$i <= 8; $i++) <input type="hidden" name="menu1[]" value="{{ $i }}">
                    @endfor
                    @for($i=9;$i <= 12; $i++) <input type="hidden" name="menu2[]" value="{{ $i }}">
                        @endfor
                        @for($i=13;$i <= 15; $i++) <input type="hidden" name="menu3[]" value="{{ $i }}">
                            @endfor
                            @for($i=16;$i <= 17; $i++) <input type="hidden" name="menu4[]" value="{{ $i }}">
                                @endfor
                                <div class="card card-primary">
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <h2 class="mb-3">
                                            Data Sub Kriteria Komitmen
                                        </h2>
                                        <table class="table table-sm text-center mb-3">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Loyal</th>
                                                    <th>Jujur</th>
                                                    <th>Tanggung Jawab</th>
                                                    <th>Disiplin</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Loyal </td>
                                                    <td><input type="text" name="loyal[]" id="loyal" value="1" readonly></td>
                                                    <td><input type="text" name="jujur[]" id="loyal1" required></td>
                                                    <td><input type="text" name="tanggung_jawab[]" id="loyal2" required></td>
                                                    <td><input type="text" name="disiplin[]" id="loyal3" required></td>
                                                </tr>
                                                <tr>
                                                    <td> Jujur </td>
                                                    <td><input type="text" name="loyal[]" id="jujur1" required></td>
                                                    <td><input type="text" name="jujur[]" id="jujur" value="1" readonly></td>
                                                    <td><input type="text" name="tanggung_jawab[]" id="jujur2" required></td>
                                                    <td><input type="text" name="disiplin[]" id="jujur3" required></td>
                                                </tr>
                                                <tr>
                                                    <td> Tanggung Jawab </td>
                                                    <td><input type="text" name="loyal[]" id="tanggung_jawab1" required></td>
                                                    <td><input type="text" name="jujur[]" id="tanggung_jawab2" required></td>
                                                    <td><input type="text" name="tanggung_jawab[]" id="tanggung_jawab" value="1" readonly></td>
                                                    <td><input type="text" name="disiplin[]" id="tanggung_jawab3" required></td>
                                                </tr>
                                                <tr>
                                                    <td> Disiplin </td>
                                                    <td><input type="text" name="loyal[]" id="disiplin1" required></td>
                                                    <td><input type="text" name="jujur[]" id="disiplin2" required></td>
                                                    <td><input type="text" name="tanggung_jawab[]" id="disiplin3" required></td>
                                                    <td><input type="text" name="disiplin[]" id="disiplin" value="1" readonly></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- /.card-body -->


                                        <h2 class="mb-3">
                                            Data Sub Kriteria Manajemen
                                        </h2>
                                        <table class="table table-sm text-center mb-3">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kepemimpinan</th>
                                                    <th>Perencanaan</th>
                                                    <th>Pengorganisasian</th>
                                                    <th>Pengarahan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Kepemimpinan </td>
                                                    <td><input type="text" name="kepemimpinan[]" id="kepemimpinan" value="1" readonly></td>
                                                    <td><input type="text" name="perencanaan[]" id="kepemimpinan1" required></td>
                                                    <td><input type="text" name="pengorganisasian[]" id="kepemimpinan2" required></td>
                                                    <td><input type="text" name="pengarahan[]" id="kepemimpinan3" required></td>
                                                </tr>
                                                <tr>
                                                    <td> Perencanaan </td>
                                                    <td><input type="text" name="kepemimpinan[]" id="perencanaan1" required></td>
                                                    <td><input type="text" name="perencanaan[]" id="perencanaan" value="1" readonly></td>
                                                    <td><input type="text" name="pengorganisasian[]" id="perencanaan2" required></td>
                                                    <td><input type="text" name="pengarahan[]" id="perencanaan3" required></td>
                                                </tr>
                                                <tr>
                                                    <td> Pengorganisasian </td>
                                                    <td><input type="text" name="kepemimpinan[]" id="pengorganisasian1" required></td>
                                                    <td><input type="text" name="perencanaan[]" id="pengorganisasian2" required></td>
                                                    <td><input type="text" name="pengorganisasian[]" id="pengorganisasian" value="1" readonly></td>
                                                    <td><input type="text" name="pengarahan[]" id="pengorganisasian3" required></td>
                                                </tr>
                                                <tr>
                                                    <td> Pengarahan </td>
                                                    <td><input type="text" name="kepemimpinan[]" id="pengarahan1" required></td>
                                                    <td><input type="text" name="perencanaan[]" id="pengarahan2" required></td>
                                                    <td><input type="text" name="pengorganisasian[]" id="pengarahan3" required></td>
                                                    <td><input type="text" name="pengarahan[]" id="pengarahan" value="1" readonly></td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <h2 class="mb-3">
                                            Data Sub Kriteria Kerja Sama
                                        </h2>
                                        <table class="table table-sm text-center mb-3">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Komunikasi</th>
                                                    <th>Beradaptasi</th>
                                                    <th>Berbagi Informasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Komunikasi </td>
                                                    <td><input type="text" name="komunikasi[]" id="komunikasi" value="1" readonly></td>
                                                    <td><input type="text" name="beradaptasi[]" id="komunikasi1"></td>
                                                    <td><input type="text" name="berbagi_informasi[]" id="komunikasi2"></td>
                                                </tr>
                                                <tr>
                                                    <td> Beradaptasi </td>
                                                    <td><input type="text" name="komunikasi[]" id="beradaptasi1"></td>
                                                    <td><input type="text" name="beradaptasi[]" id="beradaptasi" value="1" readonly></td>
                                                    <td><input type="text" name="berbagi_informasi[]" id="beradaptasi2"></td>
                                                </tr>
                                                <tr>
                                                    <td> Berbagi Informasi </td>
                                                    <td><input type="text" name="komunikasi[]" id="berbagi_informasi1"></td>
                                                    <td><input type="text" name="beradaptasi[]" id="berbagi_informasi2"></td>
                                                    <td><input type="text" name="berbagi_informasi[]" id="berbagi_informasi" value="1" readonly></td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <h2 class="mb-3">
                                            Data Sub Kriteria Hasil Kerja
                                        </h2>
                                        <table class="table table-sm text-center mb-3">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kualitas</th>
                                                    <th>Kuantitas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Kualitas </td>
                                                    <td><input type="text" name="kualitas[]" id="kualitas" value="1" readonly></td>
                                                    <td><input type="text" name="kuantitas[]" id="kualitas1"></td>
                                                </tr>
                                                <tr>
                                                    <td> Kuantitas </td>
                                                    <td><input type="text" name="kualitas[]" id="kuantitas1"></td>
                                                    <td><input type="text" name="kuantitas[]" id="kuantitas" value="1" readonly></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">reset</button>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection