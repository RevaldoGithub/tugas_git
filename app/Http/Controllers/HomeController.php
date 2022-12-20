<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Profesi;
use App\Models\About;
use App\Models\Persen;
use App\Models\Job;
use App\Models\Porto;
use App\Models\Pengalaman;
use App\Models\Sekolah;
use App\Models\Count;
use App\Models\Contact;
use App\Models\Form;

use App\Models\Config;
use App\Models\Visitor;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all()->first();
        $profesis = Profesi::all();
        $abouts = About::all()->first();
        $persens = Persen::limit(4)->get();
        $job = Job::limit(6)->get();
        $portos = Porto::limit(6)->get();
        $pengalaman = Pengalaman::orderBy('tahun', 'ASC')->limit(5)->get();
        $sekolah = Sekolah::limit(5)->get();
        $count = Count::limit(4)->get();
        $contact = Contact::all()->first();
        $config = Config::all()->first();

        $ip_now = $_SERVER['REMOTE_ADDR'];
        $validated = [
            'ip_address' => $ip_now,
            'visit_date' => date('Y-m-d'),
        ];
        Visitor::create($validated);
        return view('homepage.index', compact('banners', 'profesis', 'abouts', 'persens', 'job', 'portos', 'pengalaman', 'sekolah', 'count', 'contact', 'config'));
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
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
            'slug' => Str::slug($request->nama, '-'),
        ]);

        $validated['tanggal'] = date('M d, Y');

        Form::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
            'tanggal' => $validated['tanggal'],
            'slug' => Str::slug($request->nama, '-'),
        ]);
        return redirect()->route('index')->with('success', 'Pesan berhasil dikirim');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
