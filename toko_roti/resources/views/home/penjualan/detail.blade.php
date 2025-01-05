@extends('layouts.master');
@section('title', 'detail');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Detail Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan/detail/tambahdetail">Tambah</a>
                        </div>
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table table-bordered table-stiped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO Detail</th>
                                            <th scope="col">ID Penjualan</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detail_penjualan as $detail_penjualan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $detail_penjualan->id }}</td>
                                                <td>{{ $detail_penjualan->produk->nama_produk }}</td>
                                                <td> RP.{{number_format ($detail_penjualan->produk->harga) }}</td>
                                                <td>{{ $detail_penjualan->qty }}</td>
                                                <td>{{ number_format($detail_penjualan->produk->harga * $detail_penjualan->qty) }}</td>

                                                <td>

                                                    <a class="btn btn-danger" href="/detail_penjualan/{{ $detail_penjualan->id }}/destroy"
                                                        onclick="return confirm('Yakin mau di hapus?')">Hapus</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection
