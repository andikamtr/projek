@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Bordered Table</h3>
    </div>
    <div class="ml-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i>
        </button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="table1" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Kode Nutrisi</th>
                    <th>Nama Nutrisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                @foreach($nutrisi as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->kd_nutrisi }}</td>
                    <td>{{ $k->nutrisi }}</td>
                    <td>
                        <a href="/nutrisi/{{ $k->id }}/hapus"><i class="fa fa-trash text-danger"></i></a>
                        <a href=""><i class="fa fa-search text-success"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/nutrisi" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kode Nutrisi</label>
                        <input type="text" name="kd_nutrisi" class="form-control" placeholder="Kode Nutrisi">
                    </div>
                    <div class="form-group">
                        <label>Nutrisi</label>
                        <input type="text" name="nutrisi" class="form-control" placeholder="Nutrisi">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="ket" class="form-control" placeholder="Keterangan">
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