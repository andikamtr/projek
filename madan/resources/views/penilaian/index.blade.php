@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>NILAI</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hasil as $k =>$h)
                <tr>
                    <td>{{ $h['nik'] }}</td>
                    <td>{{ $h['nama'] }}</td>
                    <td>{{ $h['ev'] }}</td>
                    @if( $h['ev'] > 0.96) <td>Terima</td>
                    @else
                    <td>Tidak Terima</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection