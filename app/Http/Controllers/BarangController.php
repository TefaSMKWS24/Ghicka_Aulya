<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('barang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang'=> 'required',
            'nama_barang'=> 'required',
            'harga'=> 'reqired',
            'stok'=> 'required',
            'kode_kategori'=> 'required',
        ]);

        $data = [
            'kode_barang'=> $request->kode_barang,
            'nama_barang'=> $request->nama_barang,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'kode_kategori'=> $request->kode_kategori,
        ];

        DB::table('data_barang')->insert($data)
        return redirect()->route('data barang.index');
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
        // public function edit(string $id)
    {
        $barang = DB::table('data_barang')->where(''
    )
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
    public function destroy(string $id)
    {
        //
    }
}
