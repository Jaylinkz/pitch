<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addNgo;
use App\Models\User;

class createUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $users = User::all();
        return view('Superadmin.home',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('Superadmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'email'=>['email','required'],
            'password'=>['required', 'min:6', 'max:10'],
            'name'=>['required']
          ]);
          $store = new User;
          $store->name = $request->name;
          $store->password = bcrypt($request->password);
          $store->email = $request->email;
          $store->save();
          return back();

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $user = User::find($id);
        return view('Superadmin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(addNgo $request, $id)
    {
           $add = User::find($id);
           $input = $request->all();
           $add->update($input);
           return to_route('superadmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back();
    }
}
