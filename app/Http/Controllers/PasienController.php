<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Marital;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pasien.index')->with([
            'pasien' => Pasien::all(),
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
        $marital = Marital::all();
        return view('pasien.create', compact('gender', 'marital'));
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
            'gender' => 'required',
            'lahir' => 'required',
            'status' => 'required',
            'alamat' => 'required',
        ]);

        $pasien = new Pasien;
        $pasien->nama = $request->nama;
        $pasien->gender = $request->gender;
        $pasien->lahir = $request->lahir;
        $pasien->status = $request->status;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return to_route('pasien.index')->with('toast_success', 'Berhasil Menambahkan Pasien Baru!');
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
        return view('pasien.edit')->with([
            'pasien' => Pasien::find($id),
            'gender' => Gender::all(),
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
            'gender' => 'required',
            'lahir' => 'required',
            'status' => 'required',
            'alamat' => 'required',
        ]);

        $pasien = Pasien::find($id);
        $pasien->nama = $request->nama;
        $pasien->gender = $request->gender;
        $pasien->lahir = $request->lahir;
        $pasien->status = $request->status;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return to_route('pasien.index')->with('toast_success', 'Pasien Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return response()->json(['status' => 'Pasien berhasil dihapus!']);
    }
}
