@extends('layouts.master')
@section('title', 'pelanggan')
@section('content')

<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                        <h3>Halaman Edit Data pelanggan</h3>
                        <a class="btn btn-warning" href="/pelanggan">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/pelanggan/{{$pelanggan->id}}/update" method="post">
                            @csrf
                            <div class="mb-3">
                            <label for="" class="form-label">Nama pelanggan</label>
                            <input
                            type="text"
                            class="form-control"
                            name="nama_pelanggan"
                            value="{{ $pelanggan->nama_pelanggan }}"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            >
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input
                                type="text"
                                class="form-control"
                                name="alamat"
                                value="{{ $pelanggan->alamat }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                                >
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">NO Telepon</label>
                                <input
                                type="int"
                                class="form-control"
                                name="no_telepon"
                                value="{{ $pelanggan->no_telepon }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                                >
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
