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
                <th>Pertanyaan</th>
                <th>Kode Pertanyaan</th>
                <th>Ya</th>
                <th>Tidak</th>
                <th>Kode Gejala</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($pertanyaan as $key)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $key->pertanyaan }}</td>
                <td>{{ $key->kd_pertanyaan }}</td>
                <td>{{ $key->ya }}</td>
                <td>{{ $key->tidak }}</td>
                <td>{{ $key->kd_gejala }}</td>
                <td>
                    <a href="/pertanyaan/hapus/{{ $key->id_pertanyaan }}" class="btn btn-danger"><i class="fa fa-trash m-0"></i></a>
                    <a href="/pertanyaan/{{ $key->id_pertanyaan }}/edit" class="btn btn-success"><i class="fa fa-search m-0"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">pertanyaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/pertanyaan" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Pertanyaan</label>
                        <input type="text" name="pertanyaan" class="form-control" id="exampleFormControlInput1" placeholder="Pertanyaan">
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Kode Gejala</label>
                    <select class="form-select form-select-lg mb-3" name="kd_gejala" aria-label=".form-select-lg example">
                        <option selected>Pilih</option>
                        @foreach($gejala as $p)
                        <option value="{{ $p->id_gejala }}">{{ $p->kd_gejala }}</option>
                        @endforeach
                    </select>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Kode Pertanyaan</label>
                        <input type="text" name="kd_pertanyaan" class="form-control" id="exampleFormControlInput1" placeholder="Kode Pertanyaan">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Ya</label>
                        <input type="text" name="ya" class="form-control" id="exampleFormControlInput1" placeholder="Ya">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Tidak</label>
                        <input type="text" name="tidak" class="form-control" id="exampleFormControlInput1" placeholder="Tidak">
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