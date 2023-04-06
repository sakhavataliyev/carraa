<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;
use App\Http\Requests\Process\StoreRequest;
use App\Http\Requests\Process\UpdateRequest;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $process =  Process::latest('id')
        ->paginate(20);
    
    return view('backend.processes.index', compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.processes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        
        Process::create([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('process.index')->with('success', 'Process Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Process $process)
    {

        return view('backend.processes.show', compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Process $process)
    {
        return view('backend.processes.edit', compact('process'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Process $process)
    {


        // auth()->user()->update([$request->validated());

        $request->validated();
        $process->update([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('process.index')->with('success', 'Process Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Process $process)
    {
        $process->delete();
        
        return redirect()->route('process.index')->with('success', 'Process Deleted Successfully!');
    }
}
