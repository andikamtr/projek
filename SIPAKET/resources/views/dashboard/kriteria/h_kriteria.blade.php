@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <table class="table text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Pendidikan</th>
                    <th>Absensi</th>
                    <th>kedisiplinan</th>
                    <th>Prestasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1
                ?>
                <tr>
                    @foreach($kriteria as $k)
                    <td><strong>{{ $k->menu->nama }}</strong></td>
                    <td>{{ $k->pendidikan }}</td>
                    <td>{{ $k->absensi }}</td>
                    <td>{{ $k->kedisiplinan }}</td>
                    <td>{{ $k->prestasi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Pendidikan</th>
                    <th>Absensi</th>
                    <th>kedisiplinan</th>
                    <th>Prestasi</th>
                    <th>Jumlah</th>
                    <th>Prioritas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1
                ?>
                <tr>
                    @foreach($normalkriteria as $k)
                    <td><strong>{{ $k->menu->nama }}</strong></td>
                    <td>{{ $k->pendidikan }}</td>
                    <td>{{ $k->absensi }}</td>
                    <td>{{ $k->kedisiplinan }}</td>
                    <td>{{ $k->prestasi }}</td>
                    <td>{{ $k->jumlah }}</td>
                    <td>{{ $k->prioritas }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Pendidikan</th>
                    <th>Absensi</th>
                    <th>kedisiplinan</th>
                    <th>Prestasi</th>
                    <th>Jumlah</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1
                ?>
                <tr>
                    @foreach($perbaris as $k)
                    <td><strong>{{ $k->menu->nama }}</strong></td>
                    <td>{{ $k->pendidikan }}</td>
                    <td>{{ $k->absensi }}</td>
                    <td>{{ $k->kedisiplinan }}</td>
                    <td>{{ $k->prestasi }}</td>
                    <td>{{ $k->jumlah }}</td>
                    <td>{{ $k->hasil }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card">
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
@endsection