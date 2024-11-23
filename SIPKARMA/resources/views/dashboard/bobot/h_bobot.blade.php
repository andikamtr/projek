@extends('layout.main')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">
                <h2 class="mb-3">
                    Data Bobot
                </h2>
                <table class="table text-center table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Bagus Sekali</th>
                            <th>Bagus</th>
                            <th>Cukup</th>
                            <th>Kuranng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bobot as $k)
                        <tr>
                            <td> {{ $k->menu->menu }} </td>
                            <td> {{ $k->bagus_sekali }} </td>
                            <td> {{ $k->bagus }} </td>
                            <td> {{ $k->cukup }} </td>
                            <td> {{ $k->kurang }} </td>
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
                            <th>Bagus Sekali</th>
                            <th>Bagus</th>
                            <th>Cukup</th>
                            <th>Kurang</th>
                            <th>Jumlah</th>
                            <th>Prioritas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($normalbobot as $k)
                        <tr>
                            <td> {{ $k->menu->menu }} </td>
                            <td> {{ $k->bagus_sekali }} </td>
                            <td> {{ $k->bagus }} </td>
                            <td> {{ $k->cukup }} </td>
                            <td> {{ $k->kurang }} </td>
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
                            <th>Bagus Sekali</th>
                            <th>Bagus</th>
                            <th>Cukup</th>
                            <th>Kurang</th>
                            <th>Jumlah</th>
                            <th>Hasil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($perbobot as $k)
                        <tr>
                            <td> {{ $k->menu->menu }} </td>
                            <td> {{ $k->bagus_sekali }} </td>
                            <td> {{ $k->bagus }} </td>
                            <td> {{ $k->cukup }} </td>
                            <td> {{ $k->kurang }} </td>
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