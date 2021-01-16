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

<form action="{{ route('bencana-store') }}" method="post">
    @csrf
    @method('POST')

    <label for="nama_bencana" class="form-label">Nama Bencana</label>
    <div class="input-group mb-3">
        <input type="text" name="nama_bencana" id="nama_bencana" class="form-control">
    </div>
    {{--    @error('banyak_uang')--}}
    {{--    <div class="alert-danger">{{ $message }}</div>--}}
    {{--    @enderror--}}

    <label for="dropdownJenisBencana" class="form-label">Jenis Bencana</label>
    <div class="input-group mb-3">
        <select class="form-select" name="dropdownJenisBencana" id="dropdownJenisBencana">
            <option value="">Jenis Bencana</option>
            @foreach($jenis_bencana as $bencana)
                <option value="{{ $bencana->id }}">{{ $bencana->name }}</option>
            @endforeach
        </select>
    </div>

    {{--    @error('dropdownbencana')--}}
    {{--    <div class="alert-danger">{{ $message }}</div>--}}
    {{--    @enderror--}}

    <label for="deskripsi" class="form-label">Deskripsi</label>
    <div class="input-group mb-3">
        <input type="text" name="deskripsi" id="deskripsi" class="form-control">
    </div>
    {{--    @error('banyak_uang')--}}
    {{--    <div class="alert-danger">{{ $message }}</div>--}}
    {{--    @enderror--}}

    <div class="mb-3">
        <label for="photo" class="form-label">Foto</label>
        <input class="form-control" type="file" id="photo" name="photo">
    </div>
    {{--    @error('banyak_pakaian_bekas')--}}
    {{--    <div class="alert-danger">{{ $message }}</div>--}}
    {{--    @enderror--}}

    <div class="mb-3">
        <strong>Pilih Kebutuhan Logistik</strong>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="Selimut" name="checkboxLogistik[]"
                       id="checkboxLogistik[]">
                <label for="checkboxLogistik[]">Selimut</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="Beras" name="checkboxLogistik[]"
                       id="checkboxLogistik[]">
                <label for="checkboxLogistik[]">Beras</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="Masker" name="checkboxLogistik[]"
                       id="checkboxLogistik[]">
                <label for="checkboxLogistik[]">Masker</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="Mie" name="checkboxLogistik[]"
                       id="checkboxLogistik[]">
                <label for="checkboxLogistik[]">Mie</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="Kasur" name="checkboxLogistik[]"
                       id="checkboxLogistik[]">
                <label for="checkboxLogistik[]">Kasur</label>
            </li>
        </ul>
    </div>

    <button type="submit" class="btn btn-primary">SIMPAN</button>

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @elseif(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif


</form>
</body>
</html>
