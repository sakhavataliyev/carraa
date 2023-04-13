<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\PriceContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PriceContentResource;
use App\Http\Requests\PriceContent\StoreRequest;
use App\Http\Requests\PriceContent\UpdateRequest;

class PriceContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $pricecontent = PriceContent::create([
            'plan_id' => $request->plan_id,
            'content' => $request->content,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return new PriceContentResource($pricecontent);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(UpdateRequest $request, PriceContent $pricecontent)
    {
        $validated = $request->validated();
        
        $pricecontent->update([
            'plan_id' => $request->plan_id,
            'content' => $request->content,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return new PriceContentResource($pricecontent);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PriceContent $pricecontent)
    {
        $pricecontent->delete();

        return response()->json(["data" => [
            "success" => 'Price Content Deleted Successfully!'
        ]]);
    }
}
