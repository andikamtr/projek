<div class="card-body">
    <h2 class="mb-3">
        Data Sub Kriteria Manajemen
    </h2>
    <table class="table text-center table-sm">
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
            @foreach($manajemen as $k)
            <td> {{ $k->menu->menu }} </td>
            <td> {{ $k->kepemimpinan }} </td>
            <td> {{ $k->perencanaan }} </td>
            <td> {{ $k->pengorganisasian }} </td>
            <td> {{ $k->pengarahan }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <h2 class="mb-3">
        Normalisasi Data Kriteria
    </h2>
    <table class="table text-center table-sm">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Kepemimpinan</th>
                <th>Perencanaan</th>
                <th>Pengorganisasian</th>
                <th>Pengarahan</th>
                <th>Jumlah</th>
                <th>Prioritas</th>
                <th>Sub Prioritas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($normalmanajemen as $k )
            <tr>
                <td> {{ $k->menu->menu }} </td>
                <td> {{ $k->kepemimpinan }} </td>
                <td> {{ $k->perencanaan }} </td>
                <td> {{ $k->pengorganisasian }} </td>
                <td> {{ $k->pengarahan }} </td>
                <td> {{ $k->jumlah }} </td>
                <td> {{ $k->prioritas }} </td>
                <td> {{ $k->sub_prioritas }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="mb-3">
        Penjumlahan Setiap Baris
    </h2>
    <table class="table text-center table-sm">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Kepemimpinan</th>
                <th>Perencanaan</th>
                <th>Pengorganisasian</th>
                <th>Pengarahan</th>
                <th>Jumlah</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            @foreach($permanajemen as $k )
            <tr>
                <td> {{ $k->menu->menu }} </td>
                <td> {{ $k->kepemimpinan }} </td>
                <td> {{ $k->perencanaan }} </td>
                <td> {{ $k->pengorganisasian }} </td>
                <td> {{ $k->pengarahan }} </td>
                <td> {{ $k->jumlah }} </td>
                <td> {{ $k->hasil }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Jumlah : {{ $jumlahman }}</p>
    <p>N : {{ $n = 4 }}</p>
    @if($jumlahman == 0)
    <p>Lamda : 0 </p>
    <p>Ci : 0 </p>
    <p>Cr : 0 </p>
    @else
    <p>Lamda : {{ $lamda = number_format($jumlahman/$n,2)  }}</p>
    <p>Ci : {{ $ci = number_format(($lamda-$n)/$n-1,2)  }}</p>
    <p>Cr : {{ $cr = number_format($ci/0.9,2)  }}
        @if($cr < 1 ) Konsisten @else Tidak Konsisten @endif </p>
            @endif
</div>
<!-- /.card-body -->