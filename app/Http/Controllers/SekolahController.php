<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('admin.sekolah.index', compact('sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required',
            'sekolah' => 'required',
            'nama_sekolah' => 'required',
            'content' => 'required',
        ]);

        Sekolah::create([
            'tahun' => $request->tahun,
            'sekolah' => $request->sekolah,
            'nama_sekolah' => $request->nama_sekolah,
            'content' => $request->content,
        ]);
        return redirect()->route('sekolah.index')->with('success', 'sekolah berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekolah  $Sekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekolah  $Sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolah $sekolah)
    {
        return view('admin.sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekolah  $Sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        $validated = [
            'tahun' => 'required',
            'sekolah' => 'required',
            'nama_sekolah' => 'required',
            'content' => 'required',
        ];

        $validated = $request->validate($validated);
        $sekolah->update($validated);
        return redirect()->route('sekolah.index')->with('success', 'sekolah berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekolah  $Sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete($sekolah->id);
        return redirect()->route('sekolah.index')->with('success', 'sekolah berhasil dihapus');
    }
}
