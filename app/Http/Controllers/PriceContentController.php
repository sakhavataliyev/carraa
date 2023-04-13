<?php

namespace App\Http\Controllers;

use App\Models\PriceContent;
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
        return view('backend.pricecontents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        // $plan = $request->plan_id;
        PriceContent::create([
            'plan_id' => $request->plan_id,
            'content' => $request->content,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        

        return redirect()->route('priceplans.show',['priceplan'=>$request->plan_id])->with('success', 'Price Content Created Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(PriceContent $priceContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PriceContent $pricecontent)
    {
        return view('backend.pricecontents.edit', compact('pricecontent'));
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

        return redirect()->route('priceplans.show',['priceplan'=>$request->plan_id])->with('success', 'Price Content Updated Successfully!');

        // return redirect()->route('priceplans.index')->with('success', 'Price Content Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PriceContent $pricecontent)
    {
        $pricecontent->delete();
        
       return redirect()->route('priceplans.index')->with('success', 'Price Content Deleted Successfully!');
    }
}
