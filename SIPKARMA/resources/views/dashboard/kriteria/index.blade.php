@extends('layout.main')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">
                <h2 class="mb-3">
                    Data Kriteria
                </h2>
                <form action="/data-kriteria" method="post">
                    @csrf
                    @for($i = 1; $i < 5; $i++ ) <input type="hidden" name="menu_id[]" value="{{ $i }}">
                        <input type="hidden" name="id[]" value="{{ $i }}">
                        @endfor
                        <table class="table text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Komitmen</th>
                                    <th>Manajemen</th>
                                    <th>Kerja Sama</th>
                                    <th>Hasil Kerja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Komitmen </td>
                                    <td><input type="text" required name="komitmen[]" id="komitmen" value="1" readonly></td>
                                    <td><input type="text" required name="manajemen[]" id="komitmen1"></td>
                                    <td><input type="text" required name="kerja_sama[]" id="komitmen2"></td>
                                    <td><input type="text" required name="hasil_kerja[]" id="komitmen3"></td>
                                </tr>
                                <tr>
                                    <td> Manajemen </td>
                                    <td><input type="text" required name="komitmen[]" id="manajemen1"></td>
                                    <td><input type="text" required name="manajemen[]" id="manajemen" value="1" readonly></td>
                                    <td><input type="text" required name="kerja_sama[]" id="manajemen2"></td>
                                    <td><input type="text" required name="hasil_kerja[]" id="manajemen3"></td>
                                </tr>
                                <tr>
                                    <td> Kerja Sama </td>
                                    <td><input type="text" required name="komitmen[]" id="kerja_sama1"></td>
                                    <td><input type="text" required name="manajemen[]" id="kerja_sama2"></td>
                                    <td><input type="text" required name="kerja_sama[]" id="kerja_sama" value="1" readonly></td>
                                    <td><input type="text" required name="hasil_kerja[]" id="kerja_sama3"></td>
                                </tr>
                                <tr>
                                    <td> Hasil Kerja </td>
                                    <td><input type="text" required name="komitmen[]" id="hasil_kerja1"></td>
                                    <td><input type="text" required name="manajemen[]" id="hasil_kerja2"></td>
                                    <td><input type="text" required name="kerja_sama[]" id="hasil_kerja3"></td>
                                    <td><input type="text" required name="hasil_kerja[]" id="hasil_kerja" value="1" readonly></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">reset</button>
                </form>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection