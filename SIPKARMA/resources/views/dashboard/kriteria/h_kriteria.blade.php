@extends('layout.main')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">
                <h2 class="mb-3">
                    Data Kriteria
                </h2>
                <table class="table text-center table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Komitmen</th>
                            <th>Manajemen</th>
                            <th>Kerja Sama</th>
                            <th>Hasil Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kriteria as $k)
                        <tr>
                            <td> {{ $k->menu->menu }} </td>
                            <td> {{ $k->komitmen }} </td>
                            <td> {{ $k->manajemen }} </td>
                            <td> {{ $k->kerja_sama }} </td>
                            <td> {{ $k->hasil_kerja }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">
                <h2 class="mb-3">
                    Normalisasi Data
                </h2>
                <table class="table text-center table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Komitmen</th>
                            <th>Manajemen</th>
                            <th>Kerja Sama</th>
                            <th>Hasil Kerja</th>
                            <th>Jumlah</th>
                            <th>Prioritas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($normalkriteria as $k)
                        <tr>
                            <td> {{ $k->menu->menu }} </td>
                            <td> {{ $k->komitmen }} </td>
                            <td> {{ $k->manajemen }} </td>
                            <td> {{ $k->kerja_sama }} </td>
                            <td> {{ $k->hasil_kerja }} </td>
                            <td> {{ $k->jumlah }} </td>
                            <td> {{ $k->prioritas }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- /.card-body -->
        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">
                <h2 class="mb-3">
                    Penjumlahan Per Baris
                </h2>
                <table class="table text-center table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Komitmen</th>
                            <th>Manajemen</th>
                            <th>Kerja Sama</th>
                            <th>Hasil Kerja</th>
                            <th>Jumlah</th>
                            <th>Hasil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($perbaris as $k)
                        <tr>
                            <td> {{ $k->menu->menu }} </td>
                            <td> {{ $k->komitmen }} </td>
                            <td> {{ $k->manajemen }} </td>
                            <td> {{ $k->kerja_sama }} </td>
                            <td> {{ $k->hasil_kerja }} </td>
                            <td> {{ $k->jumlah }} </td>
                            <td> {{ $k->hasil }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->

        <!-- /.card-body -->
        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">
                <p>Jumlah: {{ $jumlah }}</p>
                <p>N: {{ $n = 4 }}</p>
                @if($jumlah == 0)
                <p>Lamda: 0</p>
                <p>Ci: 0</p>
                <p>Cr: 0</p>
                @else
                <p>Lamda: {{$lamda = number_format($jumlah/$n,2) }}</p>
                <p>Ci: {{ $ci = number_format(($lamda-$n)/$n-1,2) }}</p>
                <p>Cr: {{ $cr = number_format($ci/0.9,2) }}
                    @if($cr < 1 ) Konsisten @else Tidak Konsisten @endif </p>
                        @endif
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection