@extends('layouts.master');
@section('title', 'penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan/tambah">Tambah</a>
                        </div>
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table table-bordered table-stiped" >
                                    <thead>
                                        <tr>
                                            <th scope="col">ID penjualan</th>
                                            <th scope="col">ID Pelanggan</th>
                                            <th scope="col">Tanggal penjualan</th>
                                            <th scope="col">Total Harga</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penjualan as $penjualan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $penjualan->id_pelanggan }}</td>
                                                <td>{{ $penjualan->tanggal_penjualan }}</td>
                                                <td> RP.{{number_format ($penjualan->total_harga) }}</td>
                                                <td>{{ $penjualan->status }}</td>
                                                <td>
                                                    @if ($penjualan->status == 'Belum Selesai')
                                                    <a  class="btn btn-primary"
                                                        href="/penjualan/{{ $penjualan->id }}/detail">Lengkapi Transaksi</a>

                                                    @else
                                                    @endif
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
