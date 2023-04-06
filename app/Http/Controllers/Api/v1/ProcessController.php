<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Process;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProcessResource;
use App\Http\Requests\Process\StoreRequest;
use App\Http\Requests\Process\UpdateRequest;
use App\Http\Resources\ProcessResourceCollection;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ProcessResourceCollection
    {
        return new ProcessResourceCollection(Process::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        
        $process = Process::create([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status
        ]);

        return new ProcessResource($process);
    }

    /**
     * Display the specified resource.
     */
    public function show(Process $process): ProcessResource
    {
        return new ProcessResource($process);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Process $process)
    {
        $validated = $request->validated();

        $process->update([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status
        ]);

        return new ProcessResource($process);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Process $process)
    {
        $process->delete();

        return response()->json(["data" => [
            "success" => 'Process deleted.'
        ]]);
    }
}
