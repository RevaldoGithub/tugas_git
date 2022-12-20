<?php

namespace App\Http\Controllers;

use App\Models\Persen;
use Illuminate\Http\Request;

class PersenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persen = Persen::all();
        return view('admin.persen.index', compact('persen'));
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
            'keahlian' => 'required',
            'persen' => 'required',
        ]);

        Persen::create([
            'keahlian' => $request->keahlian,
            'persen' => $request->persen,
        ]);
        return redirect()->route('persen.index')->with('success', 'Keahlian berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persen  $persen
     * @return \Illuminate\Http\Response
     */
    public function show(Persen $persen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persen  $persen
     * @return \Illuminate\Http\Response
     */
    public function edit(Persen $persen)
    {
        return view('admin.persen.edit', compact('persen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persen  $persen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persen $persen)
    {
        $validated = [
            'keahlian' => 'required',
            'persen' => 'required',
        ];

        $validated = $request->validate($validated);
        $persen->update($validated);
        return redirect()->route('persen.index')->with('success', 'Keahlian berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persen  $persen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persen $persen)
    {
        $persen->delete($persen->id);
        return redirect()->route('persen.index')->with('success', 'Keahlian berhasil di hapus');
    }
}
