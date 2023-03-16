<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Slider;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Http\Requests\Slider\StoreRequest;
use App\Http\Requests\Slider\UpdateRequest;
use App\Http\Resources\SliderResourceCollection;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): SliderResourceCollection
    {

        return new SliderResourceCollection(Slider::paginate());
        
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

        $image = $request->file('image');

        if($image){
        $image_name = date('dmy_H_s_i');
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = 'slider_'.$image_name.'.'.$ext;
        $upload_path = 'storage/slider/';
        $image_url = $upload_path.$image_full_name;
        $image_last = $image->move($upload_path,$image_full_name);

        $slider = Slider::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $image_last,
            'sort_number' => 1,
            'status' => $request->status
        ]);

        return new SliderResource($slider);
        }

        $slider = Slider::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'sort_number' => 1,
            'status' => $request->status
        ]);

        return new SliderResource($slider);
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
    public function update(UpdateRequest $request, Slider $slider)
    {
        $validated = $request->validated();

        $image = $request->file('image');


        if($image){

        $old_image = $slider->image;
            
        @unlink(public_path('storage/slider/'.$old_image));
        $image_name = date('dmy_H_s_i');
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = 'slider_'.$image_name.'.'.$ext;
        $upload_path = 'storage/slider/';
        $image_url = $upload_path.$image_full_name;
        $image_last = $image->move($upload_path,$image_full_name);

        $slider->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $image_last,
            'sort_number' => $request->sort_number,
            'status' => $request->status
        ]);

        return new SliderResource($slider);
        }

        else{
            $slider->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'sort_number' => $request->sort_number,
                'status' => $request->status
            ]);

            return new SliderResource($slider);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
