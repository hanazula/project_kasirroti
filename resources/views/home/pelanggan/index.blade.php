@extends('layouts.master');
@section('title', 'pelanggan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data pelanggan</h3>
                            <a class="btn btn-primary" href="/pelanggan/tambah">Tambah</a>
                        </div>
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table table-bordered table-stiped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Pelanggan</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No telepon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelanggan as $pelanggan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pelanggan->nama_pelanggan }}</td>
                                                <td>{{ $pelanggan->alamat }}</td>
                                                <td>{{ $pelanggan->no_telepon }}</td>
                                                <td>
                                                    <a class="btn btn-warning" href="/pelanggan/{{ $pelanggan->id }}/show">Edit</a>
                                                    <a class="btn btn-danger" href="/pelanggan/{{ $pelanggan->id }}/destroy"
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
