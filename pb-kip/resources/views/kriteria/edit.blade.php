@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <form action="/kriteria/update" method="post">
            @csrf
            @method('PUT')
            <div class="modal-body">
                @foreach($kriteria as $k)
                <input type="hidden" name="id_kriteria" value="{{ $k->id_kriteria }}">
                <div class="form-group">
                    <label>Nama Kriteria</label>
                    <input type="text" class="form-control" name="nama_kriteria" value="{{ $k->nama_kriteria }}" />
                </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection