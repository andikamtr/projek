@extends('layouts.main')

@section('container')
@push('links')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Suhu Air</th>
                    <th>Kedalaman</th>
                    <th>Perairan</th>
                    <th>Luas Kolam</th>
                    <th>Tinggi Pematang</th>
                    <th>Dasar Kolam</th>
                    <th>Kelas Ikan</th>
                    <th>Jenis Ikan</th>
                </thead>
                <tbody>
                    @foreach ($data as $i => $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->water_temperature == 1 ? 'Hangat' : 'Dingin' }}</td>
                        @if ($item->depth == 1)
                        <td>Deras</td>
                        @elseif($item->depth == 2)
                        <td>Sedang</td>
                        @else
                        <td>Dangkal</td>
                        @endif
                        @if ($item->waters == 1)
                        <td>Deras</td>
                        @elseif($item->waters == 2)
                        <td>Tenang</td>
                        @else
                        <td>Diam</td>
                        @endif
                        <td>{{ $item->pool_area == 1 ? 'Luas' : 'Sedang' }}</td>
                        <td>{{ $item->challenger_height == 1 ? 'Tinggi' : 'Sedang' }}</td>
                        <td>{{ $item->bottom_pool == 1 ? 'Lumpur' : 'Tembok' }}</td>
                        <td>{{ $item->fish_class == 1 ? 'Predator' : 'Non Predator' }}</td>
                        <td>{{ $predictedLabels[$i] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection