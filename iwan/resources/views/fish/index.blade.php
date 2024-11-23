@extends('layouts.main')

@section('container')
@push('links')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endpush
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <button class="btn btn-sm btn-primary my-5" data-toggle="modal" data-target="#exampleModal">Tambah</button>
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Suhu Air</th>
                    <th>Kedalaman</th>
                    <th>Perairan</th>
                    <th>Luas Kolam</th>
                    <th>Tinggi Pematang</th>
                    <th>Dasar Kolam</th>
                    <th>Kelas Ikan</th>
                    <th>Jenis Ikan</th>
                    <th class="text-center" style="width:8em">Aksi</th>
                </thead>
                <tbody>
                    @foreach ($fish as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->water_temperature == 1 ? 'Hangat' : 'Dingin' }}</td>
                        @if ($item->depth == 1)
                        <td>Deras</td>
                        @elseif($item->depth == 2)
                        <td>Sedang</td>
                        @else
                        <td>Dangkal</td>
                        @endif
                        @if ($item->waters == 1)
                        <td>Deras</td>
                        @elseif($item->waters == 2)
                        <td>Tenang</td>
                        @else
                        <td>Diam</td>
                        @endif
                        <td>{{ $item->pool_area == 1 ? 'Luas' : 'Sedang' }}</td>
                        <td>{{ $item->challenger_height == 1 ? 'Tinggi' : 'Sedang' }}</td>
                        <td>{{ $item->bottom_pool == 1 ? 'Lumpur' : 'Tembok' }}</td>
                        <td>{{ $item->fish_class == 1 ? 'Predator' : 'Non Predator' }}</td>
                        <td>{{ $item->fish_type }}</td>
                        <td class="text-center">
                            <a href="{{ route('fish.edit',['id'=> Crypt::encrypt($item->id)]) }}"><i
                                    class="fa fa-edit text-warning"></i></a>
                            <a href="{{ route('fish.destroy',['id'=> Crypt::encrypt($item->id)]) }}"><i
                                    class="fa fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('fish.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="water_temperature">Suhu Air</label>
                        <select name="water_temperature" class="form-control">
                            <option value="2">Hangat</option>
                            <option value="1">Dingin</option>
                        </select>
                        @error('water_temperature')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="depth">Kedalaman</label>
                        <select name="depth" class="form-control">
                            <option value="3">Deras</option>
                            <option value="2">Sedang</option>
                            <option value="1">Dangkal</option>
                        </select>
                        @error('depth')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="waters">Perairan</label>
                        <select name="waters" class="form-control">
                            <option value="3">Deras</option>
                            <option value="2">Tenang</option>
                            <option value="1">Diam</option>
                        </select>
                        @error('waters')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pool_area">Luas Kolam</label>
                        <select name="pool_area" class="form-control">
                            <option value="2">Luas</option>
                            <option value="1">Sedang</option>
                        </select>
                        @error('pool_area')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="challenger_height">Tinggi Pematang</label>
                        <select name="challenger_height" class="form-control">
                            <option value="2">Tinggi</option>
                            <option value="1">Sedang</option>
                        </select>
                        @error('challenger_height')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="bottom_pool">Dasar Kolam</label>
                        <select name="bottom_pool" class="form-control">
                            <option value="2">Lumpur</option>
                            <option value="1">Tembok</option>
                        </select>
                        @error('bottom_pool')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fish_class">Kelas Ikan</label>
                        <select name="fish_class" class="form-control">
                            <option value="2">Predator</option>
                            <option value="1">Non Predator</option>
                        </select>
                        @error('fish_class')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fish_type">Jenis Ikan</label>
                        <input type="text" name="fish_type" id="fish_type"
                            class="form-control @error('fish_type') is-invalid @enderror" placeholder="Jenis Ikan">
                        @error('fish_type')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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
@endsection