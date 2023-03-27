<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Solution;
use App\Http\Controllers\Controller;
use App\Http\Resources\SolutionResource;
use App\Http\Requests\Solution\StoreRequest;
use App\Http\Requests\Solution\UpdateRequest;
use App\Http\Resources\SolutionResourceCollection;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): SolutionResourceCollection
    {
 
        return new SolutionResourceCollection(Solution::paginate());
        
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
        
        $solution = Solution::create([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status
        ]);

        return new SolutionResource($solution);
    }

    /**
     * Display the specified resource.
     */
    public function show(Solution $solution): SolutionResource
    {
        return new SolutionResource($solution);
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
    public function update(UpdateRequest $request, Solution $solution)
    {
        $validated = $request->validated();

        $solution->update([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status
        ]);

        return new SolutionResource($solution);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solution $solution)
    {
        $solution->delete();

        return response()->json(["data" => [
            "success" => 'Solution deleted.'
        ]]);
    }
}
