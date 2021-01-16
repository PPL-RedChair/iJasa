@extends('layout')
@section('body')
    <form action="{{ route('bencana-store') }}" method="post">
        @csrf
        @method('POST')

        <label for="nama_bencana" class="form-label">Nama Bencana</label>
        <div class="input-group mb-3">
            <input type="text" name="nama_bencana" id="nama_bencana" class="form-control">
        </div>

        <label for="dropdownJenisBencana" class="form-label">Jenis Bencana</label>
        <div class="input-group mb-3">
            <select class="form-select" name="dropdownJenisBencana" id="dropdownJenisBencana">
                <option value="">Jenis Bencana</option>
                @foreach($jenis_bencana as $bencana)
                    <option value="{{ $bencana->id }}">{{ $bencana->name }}</option>
                @endforeach
            </select>
        </div>

        <label for="deskripsi" class="form-label">Deskripsi</label>
        <div class="input-group mb-3">
            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input class="form-control" type="file" id="photo" name="photo">
        </div>

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
        <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>

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
@endsection
