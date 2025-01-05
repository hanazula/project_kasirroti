@extends('layouts.master');
@section('title', 'produk');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3>Halaman Tambah Data produk</h3>
                        <a class="btn btn-warning" href="/produk">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/produk/simpan" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Gambar</label>
                                <input
                                type="file"
                                class="form-control"
                                name="gambar"
                                aria-describedby=helpId
                                placeholder=""
                                />

                                @error('gambar')
                                <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nama produk</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama_produk"
                                    id=""
                                    value="{{ old('nama_produk') }}"
                                    aria-describedby=""
                                    placeholder=""
                                />

                                @error('nama_produk')
                                <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">ID Jenis</label>
                                <select name="id_jenis" id="" class="form-control">
                                    <option value="">Pilih Jenis</option>
                                    @foreach ( $jenis as $jenis)
                                        <option value="{{ $jenis->id}}">{{$jenis->nama_jenis}}</option>
                                    @endforeach
                                </select>

                                @error('id_jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input
                                    type="int"
                                    class="form-control"
                                    name="harga"
                                    id=""
                                    value="{{ old('harga') }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />

                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="" class="form-label">Stok</label>
                                <input
                                    type="int"
                                    class="form-control"
                                    name="stok"
                                    id=""
                                    value="{{ old('stok') }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />

                                @error('stok')
                                <div class="alert alert-danger mt-2">
                                        {{ $message}}
                                </div>
                                @enderror
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
