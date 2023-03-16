<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Http\Requests\Setting\UpdateRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $social =  Social::first();
        // return response()->json($social);

        // return new SettingResource($setting);
        
        // return new SocialResourceCollection(Social::paginate());
        
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
    public function show(Setting $setting): SettingResource
    {
        return new SettingResource($setting);
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
    public function update(UpdateRequest $request, Setting $setting)
    {
        // $setting->update($request->validated());

        $validated = $request->validated();

        $old_logo = $setting->logo;
        $old_favicon = $setting->favicon;        

        $logo = $request->file('logo');
        $favicon = $request->file('favicon');

        if($logo){
            @unlink(public_path('storage/setting/'.$old_logo));
            // $image_name = date('dmy_H_s_i');
            $image_name = "logo";
            $ext = strtolower($logo->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'storage/setting/';
            $image_url = $upload_path.$image_full_name;
            $logo_last = $logo->move($upload_path,$image_full_name);

            $setting->update([
                'logo' => $logo_last,
                ]);

        }

        if($favicon){
            @unlink(public_path('storage/setting/'.$old_favicon));
            $favicon_name = "favicon";
            $favicon_ext = strtolower($favicon->getClientOriginalExtension());
            $favicon_full_name = $favicon_name.'.'.$favicon_ext;
            $favicon_upload_path = 'storage/setting/';
            $favicon_url = $favicon_upload_path.$favicon_full_name;
            $favicon_last = $favicon->move($favicon_upload_path,$favicon_full_name);

            $setting->update([
                'favicon' => $favicon_last,
                ]);

        }


        $setting->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'copyright' => $request->copyright,
            'analytics' => $request->analytics,
            'updated_at' => now(),
            ]);


            return new SettingResource($setting);

        // return response()->json([
        //     'info' => [
        //         'success' => 'Update Successfully!',
        //     ],
        //     'data' => [
        //         'logo' => $request->logo,
        //         'favicon' => $request->favicon,
        //         'title' => $request->title,
        //         'description' => $request->description,
        //         'keywords' => $request->keywords,
        //         'copyright' => $request->copyright,
        //         'analytics' => $request->analytics,
        // ]]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
