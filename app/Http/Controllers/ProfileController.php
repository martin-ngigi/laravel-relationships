<?php

namespace App\Http\Controllers;

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

        //return Profile::create($request->all());

        $user = User::find($request->user_id);
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->profile_name = $request->profile_name;
        $profile->save();

        //$user = auth()->user();
        // $profile = $user->profile;
        // $name = $user->profile->profile_name;
        // //create profile
        // $profile = $user->profile()->create([
        //     'user_id' => $request->user_id,
        //     'profile_name' => $request->profile_name
        //     //or
        //     //$request->all()
        // ]);

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
}
