<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
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
        //METHOD 1
        // $this->validate($request, [
        //     'user_id' =>'required',
        //     'phone_number' =>'required',
        //     'phone_description'=>'required',
        // ]);
        // return Phone::create($request->all());


        //METHOD 2
        // $user = User::find($request->user_id);
        // $phone = new Phone();
        // $phone->user_id = $user->id;
        // $phone->phone_number = $request->phone_number;
        // $phone->phone_description = $request->phone_description;
        // $phone->save();
        // return response()->json(['success' => "Phone created successfully", 'phone'=>$phone]);

        //METHOD 3
        $user = User::find($request->user_id);
        $phone = $user->phone()->create([
            'user_id' => $request->user_id,
            'phone_number' => $request->phone_number,
            'phone_description' => $request->phone_description,
            //or
            //$request->all()
        ]);
        return $phone;
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
