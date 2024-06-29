<?php

namespace App\Http\Controllers;

use App\Models\Spesialis;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spesialis.index')->with([
            'spesialis' => Spesialis::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spesialis.create');
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
            'spesialis' => 'required',
        ]);

        $spesialis = new Spesialis;
        $spesialis->spesialis = $request->spesialis;
        $spesialis->save();

        return to_route('spesialis.index')->with('toast_success', 'Berhasil Menambahkan Spesialis!');
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
        return view('spesialis.edit')->with([
            'spesialis' => Spesialis::find($id),
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
            'spesialis' => 'required',
        ]);

        $spesialis = Spesialis::find($id);
        $spesialis->spesialis = $request->spesialis;
        $spesialis->save();

        return to_route('spesialis.index')->with('toast_success', 'Berhasil Mengubah Spesialis!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spesialis = Spesialis::find($id);
        $spesialis->delete();

        return response()->json(['status' => 'Spesialis berhasil dihapus!']);
    }
}
