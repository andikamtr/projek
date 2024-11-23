@extends('layout.main')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">
                <h2 class="mb-3">
                    Data Bobot
                </h2>
                <form action="/data-bobot" method="post">
                    @csrf
                    @for($i = 1; $i < 5; $i++ ) <input type="hidden" name="id[]" value="{{ $i }}">
                        @endfor
                        @for($i=18; $i < 22; $i++) <input type="hidden" name="menu_id[]" value="{{ $i }}">
                            @endfor
                            <table class="table text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Bagus Sekali</th>
                                        <th>Bagus</th>
                                        <th>Cukup</th>
                                        <th>Kurang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> Bagus Sekali </td>
                                        <td><input type="text" name="bs[]" id="bs" value="1" readonly></td>
                                        <td><input type="text" name="b[]" id="bs1" required></td>
                                        <td><input type="text" name="c[]" id="bs2" required></td>
                                        <td><input type="text" name="k[]" id="bs3" required></td>
                                    </tr>
                                    <tr>
                                        <td> Bagus </td>
                                        <td><input type="text" name="bs[]" id="b1" required></td>
                                        <td><input type="text" name="b[]" id="b" value="1" readonly></td>
                                        <td><input type="text" name="c[]" id="b2" required></td>
                                        <td><input type="text" name="k[]" id="b3" required></td>
                                    </tr>
                                    <tr>
                                        <td> Cukup </td>
                                        <td><input type="text" name="bs[]" id="c1" required></td>
                                        <td><input type="text" name="b[]" id="c2" required></td>
                                        <td><input type="text" name="c[]" id="c" value="1" readonly></td>
                                        <td><input type="text" name="k[]" id="c3" required></td>
                                    </tr>
                                    <tr>
                                        <td> Kurang </td>
                                        <td><input type="text" name="bs[]" id="k1" required></td>
                                        <td><input type="text" name="b[]" id="k2" required></td>
                                        <td><input type="text" name="c[]" id="k3" required></td>
                                        <td><input type="text" name="k[]" id="k" value="1" readonly></td>
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