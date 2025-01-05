@extends('layouts.master');
@section('title','tambahdetail');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3>Halaman Tambah Data Detail Penjualan</h3>
                        <a class="btn btn-warning" href="/penjualan">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/detail_penjualan/simpan" method="post">

                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">ID Penjualan</label>
                                <select name="id_penjualan" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach ( $penjualan as $penjualan)
                                        <option value="{{ $penjualan->id}}">{{$penjualan->id}}</option>
                                    @endforeach
                                </select>

                                @error('id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="" class="form-label">Nama Produk</label>
                                <select name="id_produk" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach ( $produk as $p)
                                        <option value="{{ $p->id}}">{{$p->nama_produk}}</option>
                                    @endforeach
                                </select>

                                @error('id_produk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <select name="harga" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach ( $produk as $produk)
                                        <option value="{{ $produk->id}}">{{$produk->harga }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Qty</label>
                                <input
                                    type="integer"
                                    class="form-control"
                                    name="qty"
                                    id=""
                                    aria-describedby=""
                                    placeholder=""
                                />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Subtotal</label>
                                <input
                                    type="integer"
                                    class="form-control"
                                    name="subtotal"
                                    id=""
                                    aria-describedby=""
                                    placeholder=""
                                />
                            </div>

                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
