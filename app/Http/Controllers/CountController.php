<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Count::all();
        return view('admin.count.index', compact('count'));
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
            'angka' => 'required',
            'judul' => 'required',
        ]);

        Count::create([
            'angka' => $request->angka,
            'judul' => $request->judul,
        ]);
        return redirect()->route('count.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function show(Count $count)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function edit(Count $count)
    {
        return view('admin.count.edit', compact('count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Count $count)
    {
        $validated = [
            'angka' => 'required',
            'judul' => 'required',
        ];

        $validated = $request->validate($validated);
        $count->update($validated);
        return redirect()->route('count.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function destroy(Count $count)
    {
        $count->delete($count->id);
        return redirect()->route('count.index')->with('success', 'data berhasil dihapus');
    }
}
