@extends('layouts.main')

@section('container')
<!-- Button trigger modal -->
<button type="button" data-bs-placement="top" title="Tambah Data" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fa fa-plus"></i>
</button>

<div class="table-responsive">
    <table id="example" class="table">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Kode Gejala</th>
                <th>Gejala</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($gejala as $g)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $g->kd_gejala }}</td>
                <td>{{ $g->gejala }}</td>
                <td>
                    <a href="/gejala/{{ $g->id }}/hapus" class="btn btn-danger"><i class="fa fa-trash m-0"></i></a>
                    <a href="/gejala/{{ $g->id }}/edit" class="btn btn-success"><i class="fa fa-search m-0"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Kerusakan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/gejala/tambah" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Gejala</label>
                        <input type="text" name="kd_gejala" class="form-control" id="exampleFormControlInput1" value="{{ $sku_kode }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gejala</label>
                        <input type="text" name="gejala" class="form-control" id="exampleFormControlInput1" placeholder="Gejala">
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