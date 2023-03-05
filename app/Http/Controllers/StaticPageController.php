<?php

namespace App\Http\Controllers;

use Str;
use App\Models\StaticPage;
use Illuminate\Http\Request;
use App\Http\Requests\StaticPage\StoreRequest;
use App\Http\Requests\StaticPage\UpdateRequest;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staticpage =  StaticPage::latest('id')
        ->paginate(20);
        
        return view('backend.staticpages.index', compact('staticpage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.staticpages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        
        StaticPage::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('staticpages.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $staticpage)
    {
        return view('backend.staticpages.show', [
            'staticpage' => StaticPage::findOrFail($staticpage),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $staticpage)
    {
        // return view('backend.staticpages.edit', compact('staticpage'));

        return view('backend.staticpages.edit', [
            'staticpage' => StaticPage::findOrFail($staticpage),
        ]);

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
            'status' => $request->status == 'on' ? 1 : 0
        ]);


        // $staticpage->update($request->validated());

        return redirect()->route('staticpages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StaticPage $staticpage)
    {
        $staticpage->delete();

        return redirect()->route('staticpages.index');
    }
}
