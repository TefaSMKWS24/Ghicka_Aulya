<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

use Illuminate\support\facedes\DB;
use Illuminate\support\facedes\Redirect;
use Illuminate\support\facedes\Validator;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('pelanggan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pelanggan' =>'required',
            'nama_pelanggan' =>'required',
            'nohp' => 'required',

        ]);

        $data = [
            'kode_pelanggan' => $request->kode_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'nohp' => $request->nohp,

        ];

        DB::table('pelanggan')->insert($data);
        return redirect()->route('pelanggan.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        DB::table('pelanggan')->where('kode_pelanggan', $id)->update($data);
        return redirect()->route('pelanggan.index');
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
            'kode_pelanggan' =>'required',
            'nama_pelanggan' =>'required',
            'nohp' => 'required',

        ]);

        $data = [
            'kode_pelanggan' => $request->kode_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'nohp' => $request->nohp,

        ];

        DB::table('pelanggan')->insert($data);
        return redirect()->route('pelanggan.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pelanggan')->where('kode_pelanggan', $id)->update($data);
        return redirect()->route('pelanggan.index');
    }
}
