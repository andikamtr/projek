@extends('layouts.main')

@section('container')
<form action="/diagnosa" method="POST">
    @csrf
    <div class="form-group row">
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-success">Proses</button>
        </div>
        @foreach($gejala as $g)
        <label for="staticEmail" class="col-sm-2 col-form-label"><b>{{ $g->gejala }}</b></label>
        <div class="col-sm-10">
            <input type="checkbox" name="id[]" value="{{ $g->id }}" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
        @endforeach
    </div>
</form>
@endsection