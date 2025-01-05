<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Jenis;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('home.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis =Jenis::all();
        return view('home.produk.tambah' , compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_produk' => 'required|min:5',
            'id_jenis' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);
        $image = $request->file('gambar');
        $image->storeAs('public/products', $image->hashName());

        Produk::create([
            'gambar' => $image->hashName(),
            'nama_produk' => $request->nama_produk,
            'id_jenis' => $request->id_jenis,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect('/produk')->with('succes', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis = Jenis::all();
        $produk = Produk::find($id);
        return view('home.produk.edit' , compact('produk', 'jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_produk' => 'required|min:5',
            'id_jenis' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $produk = Produk::find($id);

        if ($request->hasFile('gambar')) {

            $image = $request->file('gambar');
            $image->storeAs('public/products', $image->hashName());

            Storage::delete('public/prodects' . $produk->gambar);

        $produk->update([
            'gambar' => $image->hashName(),
            'nama_produk' => $request->nama_produk,
            'id_jenis' => $request->id_jenis,
            'harga' => $request->harga,

            'stok' => $request->stok,
        ]);
    } else {
        $produk->update([
        'nama_produk' => $request->nama_produk,
            'id_jenis' => $request->id_jenis,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
    }

    return redirect('/produk')->with(['succes'=> 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);

        Storage::delete('public/product' . $produk->gambar );

        $produk->delete();

        return redirect('/produk')->with(['success' => 'Data berhasil dihapus!'] );
    }
}
