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
    @foreach($pertanyaan as $p)
    <form class="pt-3 m-4" action="/pertanyaan/{{ $p->id_pertanyaan }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="pertanyaan">pertanyaan</label>
            <input type="text" name="pertanyaan" class="form-control" id="pertanyaan" value="{{ $p->pertanyaan }}">
        </div>
        <label for="exampleFormControlInput1" class="form-label">Kode gejala</label>
        <select class="form-select form-select-lg mb-3" name="kd_gejala" aria-label=".form-select-lg example">
            <option selected>Pilih</option>
            @foreach($gejala as $k)
            <option value="{{ $k->id_gejala }}">{{ $k->kd_gejala }}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label for="kd_pertanyaan">Kode Pertanyaan</label>
            <input type="text" name="kd_pertanyaan" class="form-control" id="kd_pertanyaan" value="{{ $p->kd_pertanyaan }}">
        </div>
        <div class="form-group">
            <label for="ya">Ya</label>
            <input type="text" name="ya" class="form-control" id="ya" value="{{ $p->ya }}">
        </div>
        <div class="form-group">
            <label for="tidak">Tidak</label>
            <input type="text" name="tidak" class="form-control" id="tidak" value="{{ $p->tidak }}">
        </div>
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Update</button>
        </div>
    </form>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>