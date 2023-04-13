<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\PricePlan;
use App\Http\Controllers\Controller;
use App\Http\Resources\PricePlanResource;
use App\Http\Requests\PricePlan\StoreRequest;
use App\Http\Requests\PricePlan\UpdateRequest;
use App\Http\Resources\PricePlanResourceCollection;

class PricePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $planid=$priceplan->id;

        $pricePlanContent = PricePlan::join('price_contents', 'price_contents.plan_id', 'price_plans.id')
                            ->select('price_plans.id',
                                    'price_plans.title',
                                    'price_plans.description',
                                    'price_plans.price',
                                    'price_plans.sort_number',
                                    'price_plans.status',
                                    'price_contents.id as content_id',
                                    'price_contents.content as content_content',
                                    'price_contents.sort_number as content_sort_number',
                                    'price_contents.status as content_status')
                            ->get();

        return response()->json($pricePlanContent);

        // return new PricePlanResourceCollection(PricePlan::paginate());
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
        
        $priceplan = PricePlan::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'sort_number' => $request->sort_number,
            'status' => $request->status
        ]);

        return new PricePlanResource($priceplan);
    }

    /**
     * Display the specified resource.
     */
    public function show(PricePlan $priceplan)
    {

        $planid=$priceplan->id;

        $pricePlanContent = PricePlan::join('price_contents', 'price_contents.plan_id', 'price_plans.id')
                            ->select('price_plans.id',
                                    'price_plans.title',
                                    'price_plans.description',
                                    'price_plans.price',
                                    'price_plans.sort_number',
                                    'price_plans.status',
                                    'price_contents.id as content_id',
                                    'price_contents.content as content_content',
                                    'price_contents.sort_number as content_sort_number',
                                    'price_contents.status as content_status')
                            ->where('plan_id', $planid)
                            ->get();

        return response()->json($pricePlanContent);

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

        return new PricePlanResource($priceplan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricePlan $priceplan)
    {
        $priceplan->delete();

        return response()->json(["data" => [
            "success" => 'Price Plan Deleted Successfully!'
        ]]);
    }
}