<?php

namespace App\Http\Controllers;

use App\Models\PricePlan;
use App\Models\PriceContent;
use Illuminate\Http\Request;
use App\Http\Requests\PricePlan\StoreRequest;
use App\Http\Requests\PricePlan\UpdateRequest;

class PricePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $priceplan =  PriceContent::with('priceplansm')
        //             ->latest('id')
        //             ->paginate(20);

        $priceplan =  PricePlan::latest('id')->paginate(20);
        
    return view('backend.priceplans.index', compact('priceplan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.priceplans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        
        PricePlan::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('priceplans.index')->with('success', 'Price Plan Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PricePlan $priceplan)
    {

    $pricecontent =  PriceContent::where('plan_id', $priceplan->id)->get();
    // dd($pricecontent);

        return view('backend.priceplans.show', compact('priceplan', 'pricecontent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PricePlan $priceplan)
    {
        return view('backend.priceplans.edit', compact('priceplan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, PricePlan $priceplan)
    {
        $validated = $request->validated();
        
        $priceplan->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('priceplans.index')->with('success', 'Price Plan Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricePlan $priceplan)
    {
        $priceplan->delete();
        return redirect()->route('priceplans.index')->with('success', 'Price Plan Deleted Successfully!');
    }
}
