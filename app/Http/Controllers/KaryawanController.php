<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Karyawan;
use App\Models\Unit;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.index')->with([
            'karyawan' => Karyawan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gender = Gender::all();
        $unit = Unit::all();
        return view('karyawan.create', compact('gender', 'unit'));
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
            'nik' => 'required|numeric',
            'nama' => 'required',
            'gender' => 'required',
            'unit' => 'required',
            'alamat' => 'required',
        ]);

        $karyawan = new Karyawan;
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->gender = $request->gender;
        $karyawan->unit = $request->unit;
        $karyawan->alamat = $request->alamat;
        $karyawan->save();

        return to_route('karyawan.index')->with('toast_success', 'Berhasil Menambahkan Karyawan Baru!');
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
        return view('karyawan.edit')->with([
            'karyawan' => Karyawan::find($id),
            'gender' => Gender::all(),
            'unit' => Unit::all(),
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
            'nik' => 'required|numeric',
            'nama' => 'required',
            'gender' => 'required',
            'unit' => 'required',
            'alamat' => 'required',
        ]);

        $karyawan = Karyawan::find($id);
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->gender = $request->gender;
        $karyawan->unit = $request->unit;
        $karyawan->alamat = $request->alamat;
        $karyawan->save();

        return to_route('karyawan.index')->with('toast_success', 'Karyawan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return response()->json(['status' => 'Karyawan berhasil dihapus!']);
    }
}
