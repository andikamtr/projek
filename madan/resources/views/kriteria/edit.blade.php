@extends('layouts.main')

@section('container')
<form action="/kriteria/update" method="post">
    @csrf
    @method("PUT")
    <div class="modal-body">
        @foreach($kriteria as $k)
        <div class="form-group">
            <label>Kode Kriteria</label>
            <input type="text" name="kd_kriteria" class="form-control" value="{{ $k->kd_kriteria }}">
        </div>
        <div class="form-group">
            <label>Kriteria</label>
            <input type="text" name="kriteria" class="form-control" value="{{ $k->kriteria }}">
        </div>
        <div class="form-group">
            <label>Nilai</label>
            <input type="text" name="nilai" class="form-control" value="{{ $k->nilai }}">
        </div>
        @endforeach
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection