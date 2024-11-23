<div class="card-body">
    <h2 class="mb-3">
        Data Sub Kriteria Kerja Sama
    </h2>
    <table class="table text-center table-sm">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Kualitas</th>
                <th>Kuantitas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kerjasama as $k)
            <td> {{ $k->menu->menu }} </td>
            <td> {{ $k->kualitas }} </td>
            <td> {{ $k->kuantitas }} </td>
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
                <th>Kualitas</th>
                <th>Kuantitas</th>
                <th>Jumlah</th>
                <th>Prioritas</th>
                <th>Sub Prioritas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($normalkerjasama as $k )
            <tr>
                <td> {{ $k->menu->menu }} </td>
                <td> {{ $k->kualitas }} </td>
                <td> {{ $k->kuantitas }} </td>
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
                <th>Kualitas</th>
                <th>Kuantitas</th>
                <th>Jumlah</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perkerjasama as $k )
            <tr>
                <td> {{ $k->menu->menu }} </td>
                <td> {{ $k->kualitas }} </td>
                <td> {{ $k->kuantitas }} </td>
                <td> {{ $k->jumlah }} </td>
                <td> {{ $k->hasil }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Jumlah : {{ $jumlahhas }}</p>
    <p>N : {{ $n = 2 }}</p>
    @if($jumlahhas == 0)
    <p>Lamda : 0 </p>
    <p>Ci : 0 </p>
    <p>Cr : 0 </p>
    @else
    <p>Lamda : {{ $lamda = number_format($jumlahhas/$n,2)  }}</p>
    <p>Ci : {{ $ci = number_format(($lamda-$n)/$n-1,2)  }}</p>
    <p>Cr : {{ $cr = number_format(0,2)  }}
        @if($cr < 1 ) Konsisten @else Tidak Konsisten @endif </p>
            @endif
</div>
<!-- /.card-body -->