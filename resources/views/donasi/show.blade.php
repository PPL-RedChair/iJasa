@extends('layout')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="https://via.placeholder.com/360" class="rounded mx-auto d-block" alt="...">
            </div>

            <div class="col">
                <h2>{{ $bencana->nama_bencana }}</h2>
                <div class="row">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">{{ $bencana->jenis_bencana->name }}</li>
                        <li class="list-group-item">Sleman</li>
                        <li class="list-group-item">350rb x dilihat</li>
                    </ul>
                </div>

                <br>

                <div class="row">
                    <strong>Logistik yang Sudah Terkumpul</strong>
                </div>

                <br>

                <form>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="banyak_selimut" id="banyak_selimut" aria-label=""
                                       class="form-control"
                                       value="{{ $bencana->logistik->banyak_selimut }}" disabled>
                                <span class="input-group-text" id="basic-addon1">Selimut</span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="banyak_masker" id="banyak_masker" aria-label=""
                                       class="form-control"
                                       value="{{ $bencana->logistik->banyak_masker }}" disabled>
                                <span class="input-group-text" id="basic-addon1">Masker</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="banyak_beras" id="banyak_beras" aria-label=""
                                       class="form-control"
                                       value="{{ $bencana->logistik->banyak_beras }}" disabled>
                                <span class="input-group-text" id="basic-addon1">Beras</span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="banyak_gandum" id="banyak_gandum" aria-label=""
                                       class="form-control"
                                       value="{{ $bencana->logistik->banyak_gandum }}" disabled>
                                <span class="input-group-text" id="basic-addon1">Gandum</span>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            <strong>Deskripsi</strong>
            <p>{{ $bencana->deskripsi }}</p>
        </div>

        <div class="col">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <form action="{{ route('donasi-create') }}">
                        <button type="submit" class="btn btn-primary">Donasi</button>
                        <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

        <br>
        <hr>

        <div class="row">
            <div class="col">
                <strong>Kejadian Lainnya</strong>
            </div>
        </div>

        <div class="row row-cols-md-3 g-4">
            <div class="col">
                <div class="card w-50">
                    <img src="https://via.placeholder.com/360" class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong class="card-title">Card title</strong>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="{{ url('/lihatbencana') }}" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-50">
                    <img src="https://via.placeholder.com/360" class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong class="card-title">Card title</strong>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="{{ url('/lihatbencana') }}" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-50">
                    <img src="https://via.placeholder.com/360" class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong class="card-title">Card title</strong>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="{{ url('/lihatbencana') }}" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
