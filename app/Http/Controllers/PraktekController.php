<?php

namespace App\Http\Controllers;

use App\Models\Praktek;
use Illuminate\Http\Request;

class PraktekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('praktek.index')->with([
            'praktek' => Praktek::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('praktek.create');
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
            'hari' => 'required',
        ]);

        $praktek = new Praktek;
        $praktek->hari = $request->hari;
        $praktek->save();

        return to_route('praktek.index')->with('toast_success', 'Berhasil Menambahkan Jadwal Praktek!');
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
        return view('praktek.edit')->with([
            'praktek' => Praktek::find($id),
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
            'hari' => 'required',
        ]);

        $praktek = Praktek::find($id);
        $praktek->hari = $request->hari;
        $praktek->save();

        return to_route('praktek.index')->with('toast_success', 'Berhasil Mengubah Jadwal Praktek!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $praktek = Praktek::find($id);
        $praktek->delete();

        return response()->json(['status' => 'Jadwal Praktek berhasil dihapus!']);
    }
}
