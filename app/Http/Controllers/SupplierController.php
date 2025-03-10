<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;
{

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('supplier.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_supplier' =>'required',
            'nama_supplier' =>'required',
            'nohp' => 'required',
            'kode_barang' => 'required',


        ]);

        $data = [
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'nohp' => $request->nohp,
            'kode_barang' => $request->kode_barang,


        ];

        DB::table('supplier')->insert($data);
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        DB::table('supplier')->where('kode_supplier', $id)->first();
        return view('supplier.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_supplier' =>'required',
            'nama_supplier' =>'required',
            'nohp' => 'required',
            'kode_barang' => 'required',


        ]);

        $data = [
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'nohp' => $request->nohp,
            'kode_barang' => $request->kode_barang,


        ];

        DB::table('supplier')->insert($data);
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('supplier')->where('kode_supplier', $id)->first();
        return view('supplier.edit');
    }
}

}
