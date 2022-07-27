<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use App\Models\Shift;
use App\Models\Tugas;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tugas = Tugas::all();
        $hari = Hari::all();
        $shift = Shift::all();
        return view('add-petugas', compact('tugas', 'hari', 'shift'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Petugas::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('FotoProfile/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return to_route('Petugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        $data = $petugas->all();
        return view('petugas', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $petugas, $id)
    {
        $data = $petugas->findOrFail($id);
        $tugas = Tugas::all();
        $hari = Hari::all();
        $shift = Shift::all();
        return view('edit-petugas', compact('data', 'hari', 'tugas', 'shift'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petugas $petugas, $id)
    {
        $data = $petugas->findOrFail($id);
        $data->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('FotoProfile/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return to_route('Petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petugas $petugas, $id)
    {
        $data = $petugas->findOrFail($id);
        $data->delete();
        return to_route('Petugas');
    }
}
