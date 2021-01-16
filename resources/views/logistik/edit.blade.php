@extends('layout')
@section('body')
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover" aria-describedby="">
                <thead class="table-light">
                <tr>
                    <th scope="col" colspan="2">Detail Bencana</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Jenis Bencana</th>
                    <td>{{ $logistik->bencana->jenis_bencana->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Nama Bencana</th>
                    <td>{{ $logistik->bencana->nama_bencana }}</td>
                </tr>
                <tr>
                    <th scope="row">Deskripsi</th>
                    <td>{{ $logistik->bencana->deskripsi }}</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <form action="{{ route('logistik-perbarui') }}" method="post">
                @csrf
                @method('POST')

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" name="banyak_selimut" id="banyak_selimut" aria-label=""
                                   class="form-control"
                                   value="{{ $logistik->banyak_selimut }}">
                            <span class="input-group-text" id="basic-addon1">Selimut</span>
                        </div>

                        @error('banyak_selimut')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" name="banyak_masker" id="banyak_masker" aria-label=""
                                   class="form-control"
                                   value="{{ $logistik->banyak_masker }}">
                            <span class="input-group-text" id="basic-addon1">Masker</span>
                        </div>

                        @error('banyak_masker')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" name="banyak_mie" id="banyak_mie" aria-label="" class="form-control"
                                   value="{{ $logistik->banyak_mie }}">
                            <span class="input-group-text" id="basic-addon1">Mie Instan</span>
                        </div>

                        @error('banyak_mie')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" name="banyak_beras" id="banyak_beras" aria-label="" class="form-control"
                                   value="{{ $logistik->banyak_beras }}">
                            <span class="input-group-text" id="basic-addon1">Beras</span>
                        </div>

                        @error('banyak_beras')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" name="banyak_gandum" id="banyak_gandum" aria-label=""
                                   class="form-control"
                                   value="{{ $logistik->banyak_gandum }}">
                            <span class="input-group-text" id="basic-addon1">Gandum</span>
                        </div>

                        @error('banyak_gandum')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" name="banyak_kasur" id="banyak_kasur" aria-label="" class="form-control"
                                   value="{{ $logistik->banyak_kasur }}">
                            <span class="input-group-text" id="basic-addon1">Kasur</span>
                        </div>

                        @error('banyak_kasur')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Kebutuhan Lain</span>
                            <input type="text" name="kebutuhan_lain" id="kebutuhan_lain" class="form-control"
                                   aria-label=""
                                   value="{{ $logistik->kebutuhan_lain }}">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
@endsection
