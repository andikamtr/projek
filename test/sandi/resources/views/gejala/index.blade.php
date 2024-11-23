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
                    <th>Kode Gejala</th>
                    <th>Gejala</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                @foreach($gejala as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->kd_gejala }}</td>
                    <td>{{ $k->gejala }}</td>
                    <td>
                        <a href="/gejala/{{ $k->id }}/hapus"><i class="fa fa-trash text-danger"></i></a>
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
            <form action="/gejala" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kode Gejala</label>
                        <input type="text" name="kd_gejala" class="form-control" placeholder="Kode Gejala">
                    </div>
                    <div class="form-group">
                        <label>Gejala</label>
                        <input type="text" name="gejala" class="form-control" placeholder="Gejala">
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