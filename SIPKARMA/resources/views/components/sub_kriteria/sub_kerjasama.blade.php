<div class="card-body">
    <h2 class="mb-3">
        Data Sub Kriteria Kerja Sama
    </h2>
    <table class="table text-center table-sm">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Komunikasi</th>
                <th>Beradaptasi</th>
                <th>Berbagi Informasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kerjasama as $k)
            <td> {{ $k->menu->menu }} </td>
            <td> {{ $k->komunikasi }} </td>
            <td> {{ $k->beradaptasi }} </td>
            <td> {{ $k->berbagi_informasi }} </td>
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
                <th>Komunikasi</th>
                <th>Beradaptasi</th>
                <th>Berbagi Informasi</th>
                <th>Jumlah</th>
                <th>Prioritas</th>
                <th>Sub Prioritas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($normalkerjasama as $k )
            <tr>
                <td> {{ $k->menu->menu }} </td>
                <td> {{ $k->komunikasi }} </td>
                <td> {{ $k->beradaptasi }} </td>
                <td> {{ $k->berbagi_informasi }} </td>
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
                <th>Komunikasi</th>
                <th>Beradaptasi</th>
                <th>Berbagi Informasi</th>
                <th>Jumlah</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perkerjasama as $k )
            <tr>
                <td> {{ $k->menu->menu }} </td>
                <td> {{ $k->komunikasi }} </td>
                <td> {{ $k->beradaptasi }} </td>
                <td> {{ $k->berbagi_informasi }} </td>
                <td> {{ $k->jumlah }} </td>
                <td> {{ $k->hasil }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Jumlah : {{ $jumlahker }}</p>
    <p>N : {{ $n = 3 }}</p>
    @if($jumlahker == 0)
    <p>Lamda : 0 </p>
    <p>Ci : 0 </p>
    <p>Cr : 0 </p>
    @else
    <p>Lamda : {{ $lamda = number_format($jumlahker/$n,2)  }}</p>
    <p>Ci : {{ $ci = number_format(($lamda-$n)/$n-1,2)  }}</p>
    <p>Cr : {{ $cr = number_format($ci/0.56,2)  }}
        @if($cr < 1 ) Konsisten @else Tidak Konsisten @endif </p>
            @endif
</div>
<!-- /.card-body -->