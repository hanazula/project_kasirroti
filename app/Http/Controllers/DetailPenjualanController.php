<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        $penjualan = Penjualan::all();
        return view('home.penjualan.tambahdetail', compact('pelanggan','produk','penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Validasi input
        // $request->validate([
        //     'nama_produk' => 'required',
        //     'harga' => 'required|numeric',
        //     'qty' => 'required|numeric',
        // ]);


        // Simpan ke database
        DetailPenjualan::create([
            'id_penjualan'=> $request->id_penjualan,
            'id_produk' => $request->id_produk,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal,  // Menyimpan subtotal hasil perhitungan
        ]);

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_produk, $nobon)
    {
        $detail = DetailPenjualan::where('id_produk', $nobon)
            ->where('id_produk', $id_produk);

        // Check if the detail exists, then delete it
        if ($detail) {
            $detail->delete();
            return redirect()->back()->with('success', 'Item deleted successfully');
        } else {
            return redirect('/');
        }
    }

    public function detail($id) {
        $penjualan = Penjualan::find($id);
        $detail_penjualan = DetailPenjualan::where('id_penjualan', $id)->get();
        return view('home.penjualan.detail', compact('detail_penjualan'));
    }
}
