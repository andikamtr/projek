@extends('layouts.main')

@section('container')
<form action="/calon-penerima/update" method="post">
    @csrf
    @method("PUT")
    <div class="modal-body">
        @foreach($cpenerima as $c)
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" value="{{ $c->nik }}">
        </div>
        <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control" placeholder="NAMA" value="{{ $c->nama }}">
        </div>
        <div class="form-group">
            <label>LANTAI</label>
            <select name="lantai" class="form-control">
                <option value="{{ $c->lantai }}" selected>{{ $c->lantai }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label>ATAP</label>
            <select name="atap" class="form-control">
                <option value="{{ $c->atap }}" selected>{{ $c->atap }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label>DINDING</label>
            <select name="dinding" class="form-control">
                <option value="{{ $c->dinding }}" selected>{{ $c->dinding }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label>TANGGUNGAN</label>
            <select name="tanggungan" class="form-control">
                <option value="{{ $c->tanggungan }}" selected>{{ $c->tanggungan }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label>PENGHASILAN</label>
            <select name="penghasilan" class="form-control">
                <option value="{{ $c->penghasilan }}" selected>{{ $c->penghasilan }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label>KEPEMILIKAN RUMAH</label>
            <select name="kepemilikan_rumah" class="form-control">
                <option value="{{ $c->kepemilikan_rumah }}" selected>{{ $c->kepemilikan_rumah }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label>MANDI CUCI KAKUS</label>
            <select name="mck" class="form-control">
                <option value="{{ $c->mck }}" selected>{{ $c->mck }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        @endforeach
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection