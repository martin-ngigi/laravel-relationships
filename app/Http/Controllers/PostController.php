<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;

class PostController extends Controller
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
     * POST/CREATE A Post
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'profile_id'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);

        //Method 1
        // return Post::create($request->all());

        //METHOD 2
        // $profile = Profile::find($request->profile_id);
        // $post = new Post();
        // $post->profile_id = $profile->id;
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->save();
        // return response()->json(['success' => "Post created successfully", 'profile'=>$post]);

        //Method 3
        $profile=Profile::find($request->profile_id);
        $post = $profile->posts()->create([ //posts() is a method defined in Profile.php
            'profile_id' => $request->profile_id,
            'title' => $request->title,
            'description' => $request->description,
            //or
            //$request->all()
        ]);
        return $post;

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
