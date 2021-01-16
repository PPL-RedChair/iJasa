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

<form action="{{ route('logistik-store') }}" method="post">
    @csrf
    @method('POST')

    <label for="dropdownbencana" class="form-label">Bencana</label>
    <div class="input-group mb-3">
        <select class="form-select" name="dropdownbencana" id="dropdownbencana">
            <option value="">Bencana</option>
            @foreach($bencana as $b)
                <option value="{{ $b->nama_bencana }}">{{ $b->nama_bencana }}</option>
            @endforeach
        </select>
    </div>

    @error('dropdownbencana')
    <div class="alert-danger">{{ $message }}</div>
    @enderror

    <label for="jumlah_pengungsi" class="form-label">Jumlah Pengungsi</label>
    <div class="input-group mb-3">
        <input type="text" name="jumlah_pengungsi" id="jumlah_pengungsi">
    </div>

    @error('jumlah_pengungsi')
    <div class="alert-danger">{{ $message }}</div>
    @enderror


    <div class="input-group mb-3">
        <label for="pengungsi_dewasa" class="form-label">Pengungsi Dewasa</label>
        <input type="text" name="pengungsi_dewasa" id="pengungsi_dewasa">

        <label for="pengungsi_anak" class="form-label">Pengungsi Anak</label>
        <input type="text" name="pengungsi_anak" id="pengungsi_anak">

        <label for="pengungsi_lansia" class="form-label">Pengungsi Lansia</label>
        <input type="text" name="pengungsi_lansia" id="pengungsi_lansia">
    </div>


    <div class="input-group mb-3">
        <label for="pengungsi_bumil" class="form-label">Pengungsi Ibu Hamil</label>
        <input type="text" name="pengungsi_bumil" id="pengungsi_bumil">

        <label for="pengungsi_balita" class="form-label">Pengungsi Balita</label>
        <input type="text" name="pengungsi_balita" id="pengungsi_balita">
    </div>

    <hr>


    <div class="input-group mb-3">
        <label for="banyak_selimut" class="form-label">Selimut</label>
        <input type="text" name="banyak_selimut" id="banyak_selimut">

        @error('banyak_selimut')
        <div class="alert-danger">{{ $message }}</div>
        @enderror

        <label for="banyak_beras" class="form-label">Beras</label>
        <input type="text" name="banyak_beras" id="banyak_beras">

        @error('banyak_beras')
        <div class="alert-danger">{{ $message }}</div>
        @enderror

        <label for="banyak_masker" class="form-label">Masker</label>
        <input type="text" name="banyak_masker" id="banyak_masker">

        @error('banyak_masker')
        <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="input-group mb-3">
        <label for="banyak_gandum" class="form-label">Gandum</label>
        <input type="text" name="banyak_gandum" id="banyak_gandum">

        @error('banyak_gandum')
        <div class="alert-danger">{{ $message }}</div>
        @enderror

        <label for="banyak_mie" class="form-label">Mie</label>
        <input type="text" name="banyak_mie" id="banyak_mie">

        @error('banyak_mie')
        <div class="alert-danger">{{ $message }}</div>
        @enderror

        <label for="banyak_kasur" class="form-label">Kasur</label>
        <input type="text" name="banyak_kasur" id="banyak_kasur">

        @error('banyak_kasur')
        <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <label for="kebutuhan_lain" class="form-label">Kebutuhan Lain</label>
    <div class="input-group mb-3">
        <input type="text" name="kebutuhan_lain" id="kebutuhan_lain">
    </div>
    <button type="submit">SIMPAN</button>


</form>
</body>
</html>
