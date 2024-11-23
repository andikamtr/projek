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
                    <th>Kode Nutrisi</th>
                    <th>Nilai CF</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                @foreach($pengetahuan as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->get_gejala }}</td>
                    <td>{{ $k->get_defisiensi }}</td>
                    <td>{{ $k->nilai_cf }}</td>
                    <td>
                        <a href=""><i class="fa fa-trash text-danger"></i></a>
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
            <form action="/pengetahuan" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kode Gejala</label>
                        <select class="form-select form-select-sm" name="get_gejala" aria-label=".form-select-sm example">
                            <option selected>Pilih</option>
                            @foreach($gejala as $g)
                            <option value="{{ $g->id }}">{{ $g->gejala }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kode Nutrisi</label>
                        <select class="form-select form-select-sm" name="get_defisiensi" aria-label=".form-select-sm example">
                            <option selected>Pilih</option>
                            @foreach($nutrisi as $n)
                            <option value="{{ $n->id }}">{{ $n->nutrisi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai CF</label>
                        <input type="text" name="nilai_cf" class="form-control" placeholder="Nilai CF">
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