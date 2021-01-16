@extends('layout')
@section('body')
    <div class="container">
        <div class="row">
            <form action="{{ route('donasi-store') }}" method="post">
                @csrf
                @method('POST')

                <strong>Jenis Donasi</strong>
                <div class="input-group mb-3">
                    <input type="text" name="banyak_beras" id="banyak_beras" aria-label="" class="form-control"
                           placeholder="Beras">
                    <span class="input-group-text" id="basic-addon1">Kilogram</span>
                </div>
                @error('banyak_beras')
                <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="input-group mb-3">
                    <input type="text" name="banyak_uang" id="banyak_uang" aria-label="" class="form-control"
                           placeholder="Uang">
                    <span class="input-group-text" id="basic-addon1">Rupiah</span>
                </div>
                @error('banyak_uang')
                <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="input-group mb-3">
                    <input type="text" name="banyak_pakaian_bekas" id="banyak_pakaian_bekas" aria-label=""
                           class="form-control"
                           placeholder="Pakaian Bekas">
                    <span class="input-group-text" id="basic-addon1">Lembar</span>
                </div>
                @error('banyak_pakaian_bekas')
                <div class="alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Rencanakan</button>
                <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
@endsection
