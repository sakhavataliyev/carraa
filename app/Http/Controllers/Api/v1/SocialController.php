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
        // $social =  Social::first();

        // if(!(Auth::user())) {
        //     abort(403, 'Unauthorized!');
        // }
        
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

        // http://carraa.test/api/v1/socials/1?facebook=faceboofdk&twitter=twittersdd&instagram=instagramfefs&tiktok=tiktokmrf&github=githubbbbd&linkedin=linkedinssd&pinterest=pinterestbdds&youtube=youtubesfdks&whatsapp=whathhbh&address=addresssdsbdfd&phone=phonejhhhbbh&email=emailmksd@esj.rr&latitude=888&longitude=878
        // $input = $request->all();
        // $validator = Validator::make($input, [
        //     'title' => 'required',
        //     'description' => 'required'
        // ]);
        // if($validator->fails()){
        //     return $this->sendError($validator->errors());       
        // }

        // $social->facebook = $input['facebook'];
        // $social->twitter = $input['twitter'];
        // $social->instagram = $input['instagram'];
        // $social->tiktok = $input['tiktok'];
        // $social->github = $input['github'];
        // $social->linkedin = $input['linkedin'];
        // $social->pinterest = $input['pinterest'];
        // $social->youtube = $input['youtube'];
        // $social->whatsapp = $input['whatsapp'];
        // $social->address = $input['address'];
        // $social->phone = $input['phone'];
        // $social->email = $input['email'];
        // $social->latitude = $input['latitude'];
        // $social->longitude = $input['longitude'];
        // $social->save();
        
        // return $this->sendResponse('Social updated.');



        // if(!(Auth::user())) {
        //     abort(403, 'Unauthorized!');
        // }
             

        // $social = Social::findOrFail($social);

        // $social->update($request->validated());

        $social->update($request->validated());
        return response()->json([
            'info' => [
                'success' => 'Update Successfully!',
            ],
            'data' => [
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'tiktok' => $request->tiktok,
                'github' => $request->github,
                'linkedin' => $request->linkedin,
                'pinterest' => $request->pinterest,
                'youtube' => $request->youtube,
                'whatsapp' => $request->whatsapp,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
        ]]);



        // $validated = $request->validated();
        // $social->update($request->validated());
    
        // $comment->name = $request->get('name');
        // $comment->text = $request->get('text');

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

    
        // $comment->save();
    
        // return response()->json($social);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        //

        // $social->delete();

        // return response()->json(["data" => [
        //     "success" => 'Post deleted.'
        // ]]);

    }
}
