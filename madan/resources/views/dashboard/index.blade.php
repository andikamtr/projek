@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5>Jumlah Calon Penerima</h5>
                <i class="fa fa-users"></i>
                {{ $cpenerima }}
            </div>
        </div>
    </div>
</div>
@endsection