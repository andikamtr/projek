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
    @foreach($solusi as $p)
    <form class="pt-3 m-4" action="/solusi/{{ $p->id_solusi }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="solusi">Solusi</label>
            <input type="text" name="solusi" class="form-control" id="solusi" value="{{ $p->solusi }}">
        </div>
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Update</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
@endforeach