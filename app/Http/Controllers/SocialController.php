<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Requests\Social\UpdateRequest;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social =  Social::first();

        return view('backend.socials.index', compact('social'));
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
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        return view('backend.socials.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Social $social)
    {
        // $validated = $request->validated();

        $social->update($request->validated());

        // $social->update($request->only([
        //     'facebook',
        //     'twitter',
        //     'instagram',
        //     'tiktok',
        //     'github',
        //     'linkedin',
        //     'pinterest',
        //     'youtube',
        //     'whatsapp',
        //     'address',
        //     'phone',
        //     'email',
        //     'latitude',
        //     'longitude',
        // ]));


        // $social->update([
        //     'facebook' => $request->facebook,
        //     'twitter' => $request->twitter,
        //     'instagram' => $request->instagram,
        //     'tiktok' => $request->tiktok,
        //     'github' => $request->github,
        //     'linkedin' => $request->linkedin,
        //     'pinterest' => $request->pinterest,
        //     'youtube' => $request->youtube,
        //     'whatsapp' => $request->whatsapp,
        //     'address' => $request->address,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'latitude' => $request->latitude,
        //     'longitude' => $request->longitude,
        //     'updated_at' => Carbon::now(),
        //     ]);

        return Redirect()->route('socials.index')->with('success', 'Socials Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        //
    }
}
