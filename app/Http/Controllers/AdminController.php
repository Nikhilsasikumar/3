<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $profile = admin::latest()->get();
        $profile = User::where('phone', Auth::user()->phone)->first();
        return view('admin.profile', ['profile' => $profile]);
        // return $profile;
    }
    public function account()
    {
        // $profile = admin::latest()->get();

        // return $profile;
    }
    public function password()
    {
        // $profile = admin::latest()->get();
        $profile = User::where('phone', Auth::user()->phone)->first();
        return view('admin.password', ['profile' => $profile]);
        // return $profile;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $admin = admin::find($id);
        // $admin->photo = request('photo');
        $admin->first_name = request('first_name');
        $admin->last_name = request('last_name');
        $admin->email = request('email');
        $admin->phone = request('phone');
        $admin->location = request('location');
        // $product->product_photo = request('product_photo');
        $admin->save();
        return redirect("/admin/profile");
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
