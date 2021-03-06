@extends('layout')
@section('body')
    <div class="container">
        <div class="row">
            <form action="{{ route('logistik-store') }}" method="post">
                @csrf
                @method('POST')

                <strong>Bencana</strong>
                <div class="input-group mb-3">
                    <select class="form-select" name="dropdownbencana" id="dropdownbencana" aria-label="">
                        <option value="">Bencana</option>
                        @foreach($bencana as $b)
                            <option value="{{ $b->nama_bencana }}">{{ $b->nama_bencana }}</option>
                        @endforeach
                    </select>
                </div>

                @error('dropdownbencana')
                <div class="alert-danger">{{ $message }}</div>
                @enderror

                <strong>Jumlah Pengungsi</strong>
                <div class="input-group mb-3">
                    <input type="text" name="jumlah_pengungsi" id="jumlah_pengungsi" class="form-control" aria-label=""
                           placeholder="Jumlah Pengungsi">
                </div>

                @error('jumlah_pengungsi')
                <div class="alert-danger">{{ $message }}</div>
                @enderror

                <strong>Detail Pengungsi</strong>
                <div class="input-group mb-3">
                    <input type="text" name="pengungsi_dewasa" id="pengungsi_dewasa" class="form-control" aria-label=""
                           placeholder="Pengungsi Dewasa">

                    <input type="text" name="pengungsi_anak" id="pengungsi_anak" class="form-control" aria-label=""
                           placeholder="Pengungsi Anak">

                    <input type="text" name="pengungsi_lansia" id="pengungsi_lansia" class="form-control" aria-label=""
                           placeholder="Pengungsi Lansia">
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="pengungsi_bumil" id="pengungsi_bumil" class="form-control" aria-label=""
                           placeholder="Pengungsi Ibu Hamil">

                    <input type="text" name="pengungsi_balita" id="pengungsi_balita" class="form-control" aria-label=""
                           placeholder="Pengungsi Balita">
                </div>

                <strong>Kebutuhan Logistik</strong>

                <div class="input-group mb-3">
                    <input type="text" name="banyak_selimut" id="banyak_selimut" class="form-control" aria-label=""
                           placeholder="Selimut">

                    @error('banyak_selimut')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="banyak_beras" id="banyak_beras" class="form-control" aria-label=""
                           placeholder="Beras">

                    @error('banyak_beras')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="banyak_masker" id="banyak_masker" class="form-control" aria-label=""
                           placeholder="Masker">

                    @error('banyak_masker')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="banyak_gandum" id="banyak_gandum" class="form-control" aria-label=""
                           placeholder="Gandum">

                    @error('banyak_gandum')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="banyak_mie" id="banyak_mie" class="form-control" aria-label=""
                           placeholder="Mie Instan">

                    @error('banyak_mie')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="banyak_kasur" id="banyak_kasur" class="form-control" aria-label=""
                           placeholder="Kasur">

                    @error('banyak_kasur')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="kebutuhan_lain" id="kebutuhan_lain" class="form-control" aria-label=""
                           placeholder="Kebutuhan Lain">
                </div>

                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
@endsection
