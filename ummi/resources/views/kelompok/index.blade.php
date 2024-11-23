@extends('layouts.main')

@section('container')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nilai</th>
            <th scope="col">NIM A</th>
            <th scope="col">NIM B</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        ?>
        @foreach($hs as $h => $v)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $v[0] }}</td>
            <td>{{ $v[1] }}</td>
            <td>{{ $v[2] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection