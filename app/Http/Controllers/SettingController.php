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
    public function show(Setting $setting)
    {
        //
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

        $old_logo = $request->old_logo;
        $old_favicon = $request->old_favicon;
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
        // $update = DB::table('settings')->update([
        //     'logo' => $logo_last,
        //     'favicon' => $favicon_last,
        //     'updated_at' => Carbon::now(),
        // ]);

        $setting->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'copyright' => $request->copyright,
            'analytics' => $request->analytics,
            'updated_at' => Carbon::now(),
            ]);

        return Redirect()->route('settings.index')->with('success', 'Settings Updated Successfully!');

        // if($logo || $favicon)
        // {

        // // @unlink(public_path('storage/setting/'.$old_logo));
        // // // $image_name = date('dmy_H_s_i');
        // // $image_name = "logo";
        // // $ext = strtolower($logo->getClientOriginalExtension());
        // // $image_full_name = $image_name.'.'.$ext;
        // // $upload_path = 'storage/setting/';
        // // $image_url = $upload_path.$image_full_name;
        // // $logo_last = $logo->move($upload_path,$image_full_name);
        // // // $data['logo'] = $image_url;

        // // @unlink(public_path('storage/setting/'.$old_favicon));
        // // $favicon_name = "favicon";
        // // $favicon_ext = strtolower($favicon->getClientOriginalExtension());
        // // $favicon_full_name = $favicon_name.'.'.$favicon_ext;
        // // $favicon_upload_path = 'storage/setting/';
        // // $favicon_url = $favicon_upload_path.$favicon_full_name;
        // // $favicon_last = $favicon->move($favicon_upload_path,$favicon_full_name);
        // // // $data['favicon'] = $favicon_url; 


        // // $update = DB::table('settings')->update([
        // //     'logo' => $logo_last,
        // //     'favicon' => $favicon_last,
        // //     'updated_at' => Carbon::now(),
        // // ]);


        // // return Redirect()->route('settings.index')->with('success', 'Brand Updated Successfully!');
        // }

        
       
        // else
        // {

        //     $update = DB::table('settings')->update([
        //         // 'logo' => $logo_last,
        //         // 'favicon' => $favicon_last,
        //         'title' => $request->title,
        //         'description' => $request->description,
        //         'keywords' => $request->keywords,
        //         'copyright' => $request->copyright,
        //         'analytics' => $request->analytics,
        //         'updated_at' => Carbon::now(),
        //     ]);

        //     return Redirect()->route('settings.index')->with('success', 'Brand Name Updated Successfully!');
        // }


    
        // return Redirect()->route('settings.index')->with('success', 'Brand Name Updated Successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
