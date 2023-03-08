<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Setting\UpdateRequest;



class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting =  Setting::first();

        return view('backend.settings.index', compact('setting'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return view('backend.settings.edit', compact('setting'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Setting $setting)
    {

        $validated = $request->validated();

        // $old = Setting::find($setting);
        $old_logo = $setting->logo;
        $old_favicon = $setting->favicon;        

        // $old_logo = $request->old_logo;
        // $old_favicon = $request->old_favicon;
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
            'updated_at' => Carbon::now(),
            ]);

        return Redirect()->route('settings.index')->with('success', 'Settings Updated Successfully!');

    }



}
