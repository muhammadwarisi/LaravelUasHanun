<?php

namespace App\Http\Controllers;

use App\Models\Kopi;
use Illuminate\Http\Request;

class KopiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kopi::paginate(10);
        return view('kopi.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kopi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kopi' => 'required',
            'jenis_kopi' => 'required',
            'asal_kopi' => 'required',
            'cabang_toko' => 'required'
        ]);
        $kopi = new Kopi();
        $kopi->nama_kopi = $request->nama_kopi;
        $kopi->jenis_kopi = $request->jenis_kopi;
        $kopi->asal_kopi = $request->asal_kopi;
        $kopi->cabang_toko = $request->cabang_toko;
        $kopi->save();
        return redirect('/kopi')->with('success', 'Berhasil Membuat data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Kopi::where('id', $id)->first();
        return view('kopi.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kopi::where('id', $id)->first();
        return view('kopi.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kopi' => 'required',
            'jenis_kopi' => 'required',
            'asal_kopi' => 'required',
            'cabang_toko' => 'required'
        ]);

        $data = [
            'nama_kopi' => $request->input('nama_kopi'),
            'jenis_kopi' => $request->input('jenis_kopi'),
            'asal_kopi' => $request->input('asal_kopi'),
            'cabang_toko' => $request->input('cabang_toko'),
        ];
        Kopi::where('id', $id)->update($data);
        return redirect('/kopi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kopi::where('id', $id)->delete();
        return redirect('/kopi');
    }
}
