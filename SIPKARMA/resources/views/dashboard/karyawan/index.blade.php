@extends('layout.main')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus fa-sm"></i>
                    Tambah Data
                </button>
                <div class="table-responsive">

                    <table id="example1" class="table table-sm table-striped text-center align-middle">
                        <thead class="table-dark vertical-align-middle">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Awal Bekerja</th>
                                <th>Masa Kerja</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->jabatan }}</td>
                                <td>{{ $d->awal_bekerja }}</td>
                                <td>{{ $d->masa_kerja }}</td>
                                <td>{{ $d->status }}</td>
                                <td>
                                    <form action="/data-karyawan/{{ $d->id }}">
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>



<!-- Modal -->
<form action="/data-karyawan" method="post">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label class="form-label">Nama</label>
                    <input class="form-control mb-4" type="text" name="nama">
                    <label class="form-label">Jabatan</label>
                    <input class="form-control mb-4" type="text" name="jabatan">
                    <label class="form-label">Awal Bekerja</label>
                    <input class="form-control mb-4" type="date" name="awal_bekerja">
                    <label class="form-label">Masa Kerja</label>
                    <input class="form-control mb-4" type="text" name="masa_kerja">
                    <label class="form-label">Status</label>
                    <input class="form-control mb-4" type="text" name="status">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection