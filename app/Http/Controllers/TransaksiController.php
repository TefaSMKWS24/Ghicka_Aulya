<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi'=> 'required',
            'tanggal_transaksi'=> 'required',
            'kode_kasir'=> 'reqired',
            'kode_barang'=> 'required',
            'kode-pelanggan'=> 'required',
            'kode_voucher'=> 'required',
            'total_belanja'=> 'required',

        ]);

        $data = [
            'kode_transaksi'=> $request->kode_barang,
            'tanggal_transaksi'=> $request->nama_barang,
            'kode_kasir'=> $request->harga,
            'kode_barang'=> $request->stok,
            'kode_pelanggan'=> $request->kode_kategori,
            'kode_voucher'=> $request->total_belanja,
            'total_belanja'=> $request->total_belanja,

        ];

        DB::table('transaksi')->insert($data);
        return redirect()->route('transaksi.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        DB::table('transaksi')->where('kode_transaksi', $id)->update($data);
        return redirect()->route('transaksi.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $request->validate([
            'kode_transaksi'=> 'required',
            'tanggal_transaksi'=> 'required',
            'kode_kasir'=> 'reqired',
            'kode_barang'=> 'required',
            'kode-pelanggan'=> 'required',
            'kode_voucher'=> 'required',
            'total_belanja'=> 'required',

        ]);

        $data = [
            'kode_transaksi'=> $request->kode_barang,
            'tanggal_transaksi'=> $request->nama_barang,
            'kode_kasir'=> $request->harga,
            'kode_barang'=> $request->stok,
            'kode_pelanggan'=> $request->kode_kategori,
            'kode_voucher'=> $request->total_belanja,
            'total_belanja'=> $request->total_belanja,

        ];

        DB::table('transaksi')->where('kode_transaksi', $id)->update($data);
        return redirect()->route('transaksi.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('transaksi')->where('kode_transaksi', $id)->update($data);
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
