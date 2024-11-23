@extends('layouts.main')

@section('container')
<?php
$act = "";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
?>
@switch($act)
@case('pertanyaan')
<?php
$diagnosa = $_GET['diagnosa'];
?>
@if($diagnosa[0] == 'P')
<?php
$conn = mysqli_connect('localhost', 'root', '', 'april');
$sql = mysqli_query($conn, "SELECT * FROM pertanyaans WHERE kd_pertanyaan='$diagnosa'");
$r = mysqli_fetch_array($sql);
echo "
<div class='row text-center'>
<div class='col-12'>
    <p class='p-4'>$r[pertanyaan]</p>
</div>
<div class='col-6'>
    <a href='?_token=aBRZyfhmczr1xNvuVt0kvNQpbBMWqGKUFLjg1WCO&act=pertanyaan&diagnosa=$r[ya]' class='btn btn-success'>Ya</a>
</div>
<div class='col-6'>
    <a href='?_token=aBRZyfhmczr1xNvuVt0kvNQpbBMWqGKUFLjg1WCO&act=pertanyaan&diagnosa=$r[tidak]' class='btn btn-danger'>Tidak</a>
</div>
</div>
"
?>
@elseif($diagnosa[0] == 'S' )
<?php
$conn = mysqli_connect('localhost', 'root', '', 'april');
$sql = mysqli_query($conn, "SELECT * FROM solusis WHERE kd_solusi='$diagnosa'");
$r = mysqli_fetch_array($sql);
echo "
<div class='row'>
    <div class='col'>
        $r[solusi]
    </div>
</div>
"
?>
@endif
@break
@default
<form action="" method="get">
    @csrf
    <input type="hidden" name="act" value="pertanyaan">
    <select class="form-select form-select-lg mb-3" name="diagnosa" aria-label=".form-select-lg example">
        <option selected>Pilih</option>
        @foreach($gejala as $p)
        <option value="{{ $p->pertanyaan_awal }}">{{ $p->gejala }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Diagnosa Kerusakan</button>
</form>
@break
@endswitch
@endsection