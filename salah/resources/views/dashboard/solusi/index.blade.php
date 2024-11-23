@extends('layouts.main')

@section('container')
<!-- Button trigger modal -->
<button type="button" data-bs-placement="top" title="Tambah Data" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fa fa-plus"></i>
</button>

<div class="table-responsive">
    <table id="example" class="table text-center">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Solusi</th>
                <th>Kode Solusi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($solusi as $key)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $key->solusi }}</td>
                <td>{{ $key->kd_solusi }}</td>
                <td>
                    <a href="/solusi/hapus/{{ $key->id_solusi }}" class="btn btn-danger"><i class="fa fa-trash m-0"></i></a>
                    <a href="/solusi/{{ $key->id_solusi }}/edit" class="btn btn-success"><i class="fa fa-search m-0"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Solusi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/solusi" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Solusi</label>
                        <input type="text" name="solusi" class="form-control" id="exampleFormControlInput1" placeholder="Solusi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Solusi</label>
                        <input type="text" name="kd_solusi" class="form-control" id="exampleFormControlInput1" placeholder="Kode Solusi">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection