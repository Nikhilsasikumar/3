<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\siteinfo;
use Illuminate\Support\Facades\Auth;

class SiteinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::where('phone', Auth::user()->phone)->first();
        $siteinfo = siteinfo::latest()->first();
        return view('admin.account', ['profile' => $profile, 'siteinfo' => $siteinfo]);
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
        $this->validate($request, [
            'phone' => 'required',
            'email' => 'required',
            'address1' => 'required',
            'mapdirection' => 'required'
        ]);
        $siteinfo = siteinfo::find($id);
        $siteinfo->phone = request('phone');
        $siteinfo->whatsapp = request('whatsapp');
        $siteinfo->email = request('email');
        $siteinfo->address1 = request('address1');
        $siteinfo->address2 = request('address2');
        $siteinfo->facebook = request('facebook');
        $siteinfo->twitter = request('twitter');
        $siteinfo->instagram = request('instagram');
        $siteinfo->linkedin = request('linkedin');
        $siteinfo->map = request('map');
        $siteinfo->mapdirection = request('mapdirection');
        $siteinfo->save();
        return redirect("/admin/profile/siteinfos");
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
