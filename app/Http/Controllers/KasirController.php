<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;
{

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kasir.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kasir'=> 'required',
            'nama_kasir'=> 'required',
            'harga'=> 'reqired',
            'stok'=> 'required',
            'kode_kategori'=> 'required',
        ]);

        $data = [
            'kode_kasir' => $request->kode_kasir,
            'nama_kasir' => $request->nama_kasir,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kode_kategori' => $request->kode_kategori,
        ]

        DB::table('kasir')->insert($data);
        return redirect()->route('kasir.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        DB::table('kasir')->where('kode_kasir', $id)->delete();
        return redirect()->route('kasir.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        DB::table('kasir')->where('kode_kasir', $id)->delete();
        return redirect()->route('kasir.index');

    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_kasir'=> 'required',
            'nama_kasir'=> 'required',
            'harga'=> 'reqired',
            'stok'=> 'required',
            'kode_kategori'=> 'required',
        ]);

        $data = [
            'kode_kasir' => $request->kode_kasir,
            'nama_kasir' => $request->nama_kasir,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kode_kategori' => $request->kode_kategori,
        ]

        DB::table('kasir')->insert($data);
        return redirect()->route('kasir.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kasir')->where('kode_kasir', $id)->delete();
        return redirect()->route('kasir.index');
    }
}
