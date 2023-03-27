<?php

namespace App\Http\Controllers\Api\v1;

// use Str;
use Illuminate\Support\Str;
use App\Models\StaticPage;
use App\Http\Controllers\Controller;
use App\Http\Resources\StaticPageResource;
use App\Http\Requests\StaticPage\StoreRequest;
use App\Http\Requests\StaticPage\UpdateRequest;
use App\Http\Resources\StaticPageResourceCollection;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): StaticPageResourceCollection
    {

        return new StaticPageResourceCollection(StaticPage::paginate());
        
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
        
        $staticpage = StaticPage::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'status' => $request->status
        ]);

        return new StaticPageResource($staticpage);

    }

    /**
     * Display the specified resource.
     */
    public function show(StaticPage $staticpage): StaticPageResource
    {
        return new StaticPageResource($staticpage);
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
    public function update(UpdateRequest $request, StaticPage $staticpage)
    {

        $validated = $request->validated();

        $staticpage->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'status' => $request->status
        ]);

        return new StaticPageResource($staticpage);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StaticPage $staticpage)
    {
        $staticpage->delete();

        return response()->json(["data" => [
            "success" => 'StaticPage deleted.'
        ]]);
    }
}
