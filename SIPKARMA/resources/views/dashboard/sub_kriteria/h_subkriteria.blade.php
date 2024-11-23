@extends('layout.main')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <!-- Sub Komitmen -->
            @include('components.sub_kriteria.sub_komitmen')
            <!-- Sub Manajemen -->
            @include('components.sub_kriteria.sub_manajemen')
            <!-- Sub Kerja Sama -->
            @include('components.sub_kriteria.sub_kerjasama')
            <!-- Sub Hasil Kerja -->
            @include('components.sub_kriteria.sub_hasilkerja')

        </div>
    </div>
</div>
@endsection