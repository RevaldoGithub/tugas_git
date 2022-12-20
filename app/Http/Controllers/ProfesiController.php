<?php

namespace App\Http\Controllers;

use App\Models\Profesi;
use Illuminate\Http\Request;

class ProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesi = Profesi::all();
        return view('admin.profesi.index', compact('profesi'));
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
            'profesi' => 'required',
        ]);

        Profesi::create([
            'profesi' => $request->profesi,
        ]);
        return redirect()->route('profesi.index')->with('success', 'profesi berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesi  $profesi
     * @return \Illuminate\Http\Response
     */
    public function show(Profesi $profesi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesi  $profesi
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesi $profesi)
    {
        return view('admin.profesi.edit', compact('profesi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesi  $profesi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesi $profesi)
    {
        $validated = [
            'profesi' => 'required',
        ];

        $validated = $request->validate($validated);
        $profesi->update($validated);
        return redirect()->route('profesi.index')->with('success', 'profesi berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesi  $profesi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesi $profesi)
    {
        $profesi->delete($profesi->id);
        return redirect()->route('profesi.index')->with('success', 'profesi berhasil dihapus');
    }
}
