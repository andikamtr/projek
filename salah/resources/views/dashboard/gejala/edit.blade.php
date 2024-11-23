<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    @foreach($gejala as $p)
    <form class="pt-3 m-4" action="/gejala/{{ $p->id_gejala }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="kd_gejala">Kode Gejala</label>
            <input type="text" name="kd_gejala" class="form-control" id="kd_gejala" value="{{ $p->kd_gejala }}">
        </div>
        <div class="form-group">
            <label for="gejala">Gejala</label>
            <input type="text" name="gejala" class="form-control" id="gejala" value="{{ $p->gejala }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pertanyaan Awal</label>
            <input type="text" name="pertanyaan_awal" class="form-control" id="exampleFormControlInput1" value="{{ $p->pertanyaan_awal }}">
        </div>
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Update</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
@endforeach