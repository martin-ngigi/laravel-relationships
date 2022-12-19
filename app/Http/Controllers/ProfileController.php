<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                //return Profile::all();

        //return Profile::find(1)->lastestPost;
        $profile = Profile::orderBy('id','DESC')->get();
        return ProfileResource::collection($profile);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'user_id' =>'required',
            'profile_name' =>'required',
        ]);

        //METHOD 1
        //return Profile::create($request->all());

        //METHOD 2
        // $user = User::find($request->user_id);
        // $profile = new Profile();
        // $profile->user_id = $user->id;
        // $profile->profile_name = $request->profile_name;
        // $profile->save();
        // return response()->json(['success' => "Profile created successfully", 'profile'=>$profile]);

        //METHOD 3
        $user = User::find($request->user_id);
        $profile = $user->profile()->create([ //profile() is a method defined in User.php
            'user_id' => $request->user_id,
            'profile_name' => $request->profile_name
            //or
            //$request->all()
        ]);
        return $profile;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_latest_profile_post_resource(){
        //return Profile::all();

        //return Profile::find(1)->lastestPost;
        $profile = Profile::orderBy('id','DESC')->get();
        return ProfileResource::collection($profile);
    }
}
