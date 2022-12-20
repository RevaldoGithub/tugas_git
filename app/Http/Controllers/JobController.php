<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::all();
        return view('admin.job.index', compact('job'));
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
            'icon' => 'image|file|required',
            'job' => 'required',
            'content' => 'required',
        ]);

        $icon = $request->file('icon')->store('post-image/job');
        $validated['icon'] = $icon;

        Job::create([
            'icon' => $validated['icon'],
            'job' => $request->job,
            'content' => $request->content,
        ]);

        return redirect()->route('job.index')->with('success', 'Job telah berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('admin.job.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $validated = [
            'icon' => 'image|file',
            'job' => 'required',
            'content' => 'required',
        ];

        $validated = $request->validate($validated);
        if ($request->file('icon')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['icon'] = $request->file('icon')->store('post-image/job');
        };
        $job->update($validated);

        return redirect()->route('job.index')->with('success', 'Job telah berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        if ($job->image) {
            Storage::delete($job->image);
        }
        $job->delete($job->id);
        return redirect()->route('job.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
