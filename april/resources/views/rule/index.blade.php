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
                <th>Kode Kerusakan</th>
                <th>Kode Gejala</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($rule as $r)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $r->kerusakan->kerusakan }}</td>
                <td>{{ $r->gejala->gejala }}</td>
                <td>
                    <a href="/rule/{{ $r->id }}/hapus" class="btn btn-danger"><i class="fa fa-trash m-0"></i></a>
                    <a href="/rule/{{ $r->id }}/edit" class="btn btn-success"><i class="fa fa-search m-0"></i></a>
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
            <form action="/rule/tambah" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Gejala</label>
                        <select name="id_gejala" class="form-control">
                            <option selected>Pilih Gejala</option>
                            @foreach($gejala as $g)
                            <option value="{{ $g->id }}"> {{ $g->gejala  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Kerusakan</label>
                        <select name="id_kerusakan" class="form-control">
                            <option selected>Pilih Kerusakan</option>
                            @foreach($kerusakan as $k)
                            <option value="{{ $k->id }}"> {{ $k->kerusakan  }}</option>
                            @endforeach
                        </select>
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