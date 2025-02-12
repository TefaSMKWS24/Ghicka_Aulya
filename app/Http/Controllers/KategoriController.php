<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;
{

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kategori'=> 'required',
            'nama_kategori'=> 'required',
            'supplier'=> 'reqired',

        ]);

        $data = [
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori,
            'supplier' => $request->supplier,

        ]

        DB::table('kategori')->insert($data);
        return redirect()->route('kategori.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        DB::table('kategori')->where('kode_kategori', $id)->update($data);
        return redirect()->route('kategori.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_kategori'=> 'required',
            'nama_kategori'=> 'required',
            'supplier'=> 'reqired',

        ]);

        $data = [
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori,
            'supplier' => $request->supplier,

        ]

            DB::table('kategori')->insert($data);
        return redirect()->route('kategori.index')
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori')->where('kode_kategori', $id)->update($data);
        return redirect()->route('kategori.index');
    }
}
