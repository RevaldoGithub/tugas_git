<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengalaman = Pengalaman::orderBy('tahun', 'ASC')->get();
        return view('admin.pengalaman.index', compact('pengalaman'));
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
            'job' => 'required',
            'company' => 'required',
            'content' => 'required',
        ]);

        Pengalaman::create([
            'tahun' => $request->tahun,
            'job' => $request->job,
            'company' => $request->company,
            'content' => $request->content,
        ]);
        return redirect()->route('pengalaman.index')->with('success', 'Pengalaman berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengalaman $pengalaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengalaman $pengalaman)
    {
        return view('admin.pengalaman.edit', compact('pengalaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengalaman $pengalaman)
    {
        $validated = [
            'tahun' => 'required',
            'job' => 'required',
            'company' => 'required',
            'content' => 'required',
        ];

        $validated = $request->validate($validated);
        $pengalaman->update($validated);
        return redirect()->route('pengalaman.index')->with('success', 'Pengalaman berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengalaman $pengalaman)
    {
        $pengalaman->delete($pengalaman->id);
        return redirect()->route('pengalaman.index')->with('success', 'Pengalaman berhasil dihapus');
    }
}
