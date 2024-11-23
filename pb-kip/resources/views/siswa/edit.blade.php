@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <form action="/data-siswa/update" method="post">
            @csrf
            @method('PUT')
            <div class="modal-body">
                @foreach($siswa as $s)
                <input type="hidden" name="id_siswa" value="{{ $s->id_siswa }}">
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" value="{{ $s->nama_siswa }}" />
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="{{ $s->kelas }}" />
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="{{ $s->jk }}">{{ $s->jk }}</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" name="ttl" value="{{ $s->ttl }}" />
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $s->alamat }}" />
                </div>
                @foreach($nilai->where('id_siswa',$s->id_siswa) as $n)
                <input type="hidden" name="id_kriteria[]" value="{{ $n->id_kriteria }}">
                <div class="form-group">
                    <label>{{ $n->kriteria->nama_kriteria }}</label>
                    <input type="number" class="form-control" name="nilai[]" value="{{ $n->nilai }}" />
                </div>
                @endforeach
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection