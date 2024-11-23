@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <form action="/hasil-kriteria" method="post">
            @csrf
            @for($i=1; $i < 5; $i++) <input type="hidden" name="menu_id[]" value="{{ $i }}">
                @endfor
                <table class="table text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Pendidikan</th>
                            <th>Absensi</th>
                            <th>kedisiplinan</th>
                            <th>Prestasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Pendidikan</strong></td>
                            <td><input class="form-control" name="pendidikan[]" id="pendidikan" type="text" value="1" readonly></td>
                            <td><input class="form-control" name="absensi[]" id="pendidikan1" type="text"></td>
                            <td><input class="form-control" name="kedisiplinan[]" id="pendidikan2" type="text"></td>
                            <td><input class="form-control" name="prestasi[]" id="pendidikan3" type="text"></td>
                        </tr>
                        <tr>
                            <td><strong>Absensi</strong></td>
                            <td><input class="form-control" name="pendidikan[]" id="absensi1" type="text"></td>
                            <td><input class="form-control" name="absensi[]" id="absensi" type="text" value="1" readonly></td>
                            <td><input class="form-control" name="kedisiplinan[]" id="absensi2" type="text"></td>
                            <td><input class="form-control" name="prestasi[]" id="absensi3" type="text"></td>
                        </tr>
                        <tr>
                            <td><strong>Kedisiplinan</strong></td>
                            <td><input class="form-control" name="pendidikan[]" id="kedisiplinan1" type="text"></td>
                            <td><input class="form-control" name="absensi[]" id="kedisiplinan2" type="text"></td>
                            <td><input class="form-control" name="kedisiplinan[]" id="kedisiplinan" type="text" value="1" readonly></td>
                            <td><input class="form-control" name="prestasi[]" id="kedisiplinan3" type="text"></td>
                        </tr>
                        <tr>
                            <td><strong>Prestasi</strong></td>
                            <td><input class="form-control" name="pendidikan[]" id="prestasi1" type="text"></td>
                            <td><input class="form-control" name="absensi[]" id="prestasi2" type="text"></td>
                            <td><input class="form-control" name="kedisiplinan[]" id="prestasi3" type="text"></td>
                            <td><input class="form-control" name="prestasi[]" id="prestasi" type="text" value="1" readonly></td>
                        </tr>

                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>
        </form>
    </div>
</div>
@endsection