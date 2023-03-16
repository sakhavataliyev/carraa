<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Str;
use App\Http\Requests\Slider\StoreRequest;
use App\Http\Requests\Slider\UpdateRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider =  Slider::latest('id')
        ->paginate(20);
        
        return view('backend.sliders.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.sliders.create');
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
            // $image_name = "image";
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = 'slider_'.$image_name.'.'.$ext;
            $upload_path = 'storage/slider/';
            $image_url = $upload_path.$image_full_name;
            $image_last = $image->move($upload_path,$image_full_name);

            Slider::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'image' => $image_last,
                'sort_number' => 1,
                'status' => $request->status == 'on' ? 1 : 0
            ]);

            // return redirect()->route('sliders.index');
            return redirect()->route('sliders.index')->with('success', 'Slider Added Successfully!');
            }

            Slider::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'sort_number' => 1,
                'status' => $request->status == 'on' ? 1 : 0
            ]);

            return redirect()->route('sliders.index')->with('success', 'Slider Added Successfully!');

    }



    /**
     * Display the specified resource.
     */
    // public function show(string $slider)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slider)
    {
        return view('backend.sliders.edit', [
            'slider' => Slider::findOrFail($slider),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Slider $slider)
    {
        $validated = $request->validated();

            $image = $request->file('image');


                    if($image){

                        // $delete = Slider::find($slider);
                        $old_image = $slider->image;
                        
                        // @unlink(public_path('storage/slider/'.$old_image));

                    // $old_image = $request->old_image;

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
                        'status' => $request->status == 'on' ? 1 : 0
                    ]);

                    // return redirect()->route('sliders.index');
                    return redirect()->route('sliders.index')->with('success', 'Slider Updated Successfully!');
                    }

                    else{
                        $slider->update([
                            'title' => $request->title,
                            'slug' => Str::slug($request->title),
                            // 'image' => $image_last,
                            'sort_number' => $request->sort_number,
                            'status' => $request->status == 'on' ? 1 : 0
                        ]);

                        // return redirect()->route('sliders.index');
                        return redirect()->route('sliders.index')->with('success', 'Slider Updated Successfully!');
                    }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        // $delete = Slider::find($slider);
        $old_image = $slider->image;
        
        @unlink(public_path('storage/slider/'.$old_image));

        $slider->delete();

        return redirect()->route('sliders.index');
        
    }
}
