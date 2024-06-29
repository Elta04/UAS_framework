<?php

namespace App\Http\Controllers;

use App\Models\Marital;
use Illuminate\Http\Request;

class MaritalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marital.index')->with([
            'marital' => Marital::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marital.create');
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
            'status' => 'required',
        ]);

        $marital = new Marital;
        $marital->status = $request->status;
        $marital->save();

        return to_route('marital.index')->with('toast_success', 'Berhasil Menambahkan Status Perkawinan');
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
        return view('marital.edit')->with([
            'marital' => Marital::find($id),
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
            'status' => 'required',
        ]);

        $marital = Marital::find($id);
        $marital->status = $request->status;
        $marital->save();

        return to_route('marital.index')->with('toast_success', 'Berhasil Mengubah Status Perkawinan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marital = Marital::find($id);
        $marital->delete();

        return response()->json(['status' => 'Status Perkawinan berhasil dihapus!']);
    }
}
