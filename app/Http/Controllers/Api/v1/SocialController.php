<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\SocialResource;
use App\Http\Requests\Social\UpdateRequest;
use App\Http\Resources\SocialResourceCollection;

class SocialController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')
    //         ->only(['store','update']);
    // }




    /**
     * Display a listing of the resource.
     */
    public function index(): SocialResourceCollection
    {
        // $social =  Social::first();
        // return response()->json($social);

        return new SocialResourceCollection(Social::paginate());
        
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social): SocialResource
    {
        
        return new SocialResource($social);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Social $social)
    {

        $social->update($request->validated());

        return new SocialResource($social);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {


    }
}
