<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Http\Requests\Solution\StoreRequest;
use App\Http\Requests\Solution\UpdateRequest;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solution =  Solution::latest('id')
            ->paginate(20);
        
        return view('backend.solutions.index', compact('solution'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.solutions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        
        Solution::create([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('solutions.index')->with('success', 'Solution Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Solution $solution)
    {

        return view('backend.solutions.show', compact('solution'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solution $solution)
    {
        return view('backend.solutions.edit', compact('solution'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Solution $solution)
    {

        $validated = $request->validated();
        $solution->update([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('solutions.index')->with('success', 'Solution Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solution $solution)
    {
        $solution->delete();
        
        return redirect()->route('solutions.index')->with('success', 'Solution Deleted Successfully!');
    }
}
