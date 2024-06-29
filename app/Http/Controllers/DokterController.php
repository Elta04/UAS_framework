<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Praktek;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dokter.index')->with([
            'dokter' => Dokter::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spesialis = Spesialis::all();
        $praktek = Praktek::all();
        return view('dokter.create', compact('spesialis', 'praktek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'praktek' => 'required',
            'telepon' => 'required|numeric|min:12',
        ]);

        $dokter = new Dokter;
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->praktek = $request->praktek;
        $dokter->telepon = $request->telepon;
        $dokter->save();

        return to_route('dokter.index')->with('toast_success', 'Berhasil Menambahkan Dokter Baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dokter.edit')->with([
            'dokter' => Dokter::find($id),
            'spesialis' => Spesialis::all(),
            'praktek' => Praktek::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'praktek' => 'required',
            'telepon' => 'required|numeric|min:12',
        ]);

        $dokter = Dokter::find($id);
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->praktek = $request->praktek;
        $dokter->telepon = $request->telepon;
        $dokter->save();

        return to_route('dokter.index')->with('toast_success', 'Dokter Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();

        return response()->json(['status' => 'Dokter berhasil dihapus!']);
    }
}
