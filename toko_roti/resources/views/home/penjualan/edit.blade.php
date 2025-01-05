@extends('layouts.master')
@section('title', 'penjualan')
@section('content')

<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                        <h3>Halaman Edit Data Penjualan</h3>
                        <a class="btn btn-warning" href="/penjualan">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/penjualan/{{$penjualan->id}}/update" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">ID Pelanggan</label>
                                <select name="id_pelanggan" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach ( $pelanggan as $pelanggan)
                                        <option value="{{ $pelanggan->id}}">{{$pelanggan->nama_pelanggan}}</option>
                                    @endforeach
                                </select>

                                @error('id_pelanggan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                            <label for="" class="form-label">Tanggal penjualan</label>
                            <input
                            type="date"
                            class="form-control"
                            name="tanggal_penjualan"
                            value="{{ $penjualan->tanggal_penjualan }}"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            >
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Total Harga</label>
                                <input
                                type="integer"
                                class="form-control"
                                name="total_harga"
                                value="{{ $penjualan->total_harga }}"
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
