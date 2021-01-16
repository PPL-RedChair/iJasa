<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="{{ route('donasi-store') }}" method="post">
    @csrf
    @method('POST')

    <div class="input-group mb-3">
        <input type="text" name="banyak_beras" id="banyak_beras" aria-label="" class="form-control" placeholder="Beras">
    </div>
    @error('banyak_beras')
    <div class="alert-danger">{{ $message }}</div>
    @enderror

    <div class="input-group mb-3">
        <input type="text" name="banyak_uang" id="banyak_uang" aria-label="" class="form-control" placeholder="Uang">
    </div>
    @error('banyak_uang')
    <div class="alert-danger">{{ $message }}</div>
    @enderror

    <div class="input-group mb-3">
        <input type="text" name="banyak_pakaian_bekas" id="banyak_pakaian_bekas" aria-label="" class="form-control"
               placeholder="Pakaian Bekas">
    </div>
    @error('banyak_pakaian_bekas')
    <div class="alert-danger">{{ $message }}</div>
    @enderror


    <button type="submit" class="btn btn-primary">Rencanakan</button>
    <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>


</form>
</body>
</html>
