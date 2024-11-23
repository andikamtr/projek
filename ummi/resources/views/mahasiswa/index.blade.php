@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i>
        </button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Daerah Asal</th>
                    <th>Jurusan</th>
                    <th>Jenis Kelamain</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                @foreach($mahasiswa as $m)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->asal }}</td>
                    <td>{{ $m->jurusan }}</td>
                    <td>{{ $m->jk }}</td>
                    <td>
                        <a href="/mahasiswa/{{ $m->nim }}/hapus"><i class="fa fa-trash text-danger"></i></a>
                        <a href="/mahasiswa/{{ $m->nim }}/edit"><i class="fa fa-search text-success"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/mahasiswa/tambah" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control" name="nim" placeholder="NIM">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>Daerah Asal</label>
                        <input type="text" class="form-control" name="asal" placeholder="Daerah Asal">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jk">
                            <option selected>Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Organisasi</label>
                        <select class="form-control" name="organisasi">
                            <option selected>Pilih</option>
                            <option value="4">Ketua</option>
                            <option value="3">Sekretaris</option>
                            <option value="2">Bendahara</option>
                            <option value="1">Anggota</option>
                            <option value="0">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kompetisi</label>
                        <select class="form-control" name="kompetisi">
                            <option selected>Pilih</option>
                            <option value="3">Juara 1</option>
                            <option value="2">Juara 2</option>
                            <option value="1">Juara 3</option>
                            <option value="0">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hobi</label>
                        <select class="form-control" name="hobi">
                            <option selected>Pilih</option>
                            <option value="3">Sangat Suka</option>
                            <option value="2">Suka</option>
                            <option value="1">Cukup Suka</option>
                            <option value="0">Tidak Suka</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection