@extends('layouts.main')

@section('container')
<!--begin::Card-->
<div class="card card-custom gutter-b">
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-bordered table-checkable text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nilai</th>
                    <th>Label</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                @foreach($defuzzified_results as $d)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $d['siswa'] }}</td>
                    <td>{{ $d['defuzzified_value'] }}</td>
                    @if($d['defuzzified_value'] >= 80 )
                    <td>Terima</td>
                    @else
                    <td>Tidak Terima</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
<!--end::Card-->
@endsection