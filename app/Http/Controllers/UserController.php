<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * GET ALL USERS
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
        //create one user
        // return User::create([
        //     'name' => 'Martin',
        //     'email' => 'marti@gmail.com',
        //     'password' => '123456',
        // ]);

        //validate data
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ]);

        return User::create($request->all());

    }
    /**
     * GET -> get one user by id
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return User::find($id);
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
        $user = User::find($id);
        $user->update($request->all());
        return $user;

    }

    /**
     * DELETE
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id);
    }

    // public function search($nameoremail){
    //     return User::where('name', 'LIKE', "%$nameoremail%")
    //         ->orWhere('email', 'LIKE', "%$nameoremail%");
    // }

    public function search($name){
        return User::where('name','like','%'.$name.'%')->get();
    }

    //get user resource i.e. nested object of profile inside user
    public function get_user_resource(){
          //return User::find(1)->profile;
        $users = User::orderBy('id','DESC')->get();
        return UserResource::collection($users);
    }

}
