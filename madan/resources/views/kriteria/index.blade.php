@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>KODE KRITERIA</th>
                    <th>KRITERIA</th>
                    <th>NILAI</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kriteria as $k)
                <tr>
                    <td>{{ $k->kd_kriteria }}</td>
                    <td>{{ $k->kriteria }}</td>
                    <td>{{ $k->nilai }}</td>
                    <td>
                        <a href="/kriteria/{{ $k->kd_kriteria }}/edit" class="btn btn-success"><i class="fa fa-search"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection