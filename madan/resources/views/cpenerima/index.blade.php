@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            <i class="fa fa-plus"></i>
        </button>
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cpenerima as $c)
                <tr>
                    <td>{{ $c->nik }}</td>
                    <td>{{ $c->nama }}</td>
                    <td>
                        <a href="/calon-penerima/{{ $c->nik }}/hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        <a href="/calon-penerima/{{ $c->nik }}/edit" class="btn btn-success"><i class="fa fa-search"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Data Calon Penerima</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/calon-penerima/tambah" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" name="nama" class="form-control" placeholder="NAMA">
                    </div>
                    <div class="form-group">
                        <label>LANTAI</label>
                        <select name="lantai" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Tanah</option>
                            <option value="75">Kayu</option>
                            <option value="50">Keramik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ATAP</label>
                        <select name="atap" class="form-control">
                            <option selected>Pilih</option>
                            <option value="25">Beton</option>
                            <option value="50">Genteng</option>
                            <option value="75">Seng</option>
                            <option value="100">Rumbia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>DINDING</label>
                        <select name="dinding" class="form-control">
                            <option selected>Pilih</option>
                            <option value="50">Tembok</option>
                            <option value="75">Kayu</option>
                            <option value="100">Bambu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>TANGGUNGAN</label>
                        <select name="tanggungan" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">3 Orang +</option>
                            <option value="75">2 Orang</option>
                            <option value="50">1 Orang</option>
                            <option value="25">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>PENGHASILAN</label>
                        <select name="penghasilan" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">- Rp 1.200.000</option>
                            <option value="75">Rp 1.300.000 - Rp 2.000.000</option>
                            <option value="50">Rp 2.100.000 - Rp 2.900.000</option>
                            <option value="25">+ Rp 3.000.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>KEPEMILIKAN RUMAH</label>
                        <select name="kepemilikan_rumah" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Milik sendiri</option>
                            <option value="50">Kontrak/Sewa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>MANDI CUCI KAKUS</label>
                        <select name="mck" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Ada</option>
                            <option value="50">Tidak ada</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>