<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use App\siteinfo;
use App\product;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = service::latest()->paginate(9);
        $product = product::latest()->limit(4)->get();
        $lser = service::latest()->limit(4)->get();
        $siteinfo = siteinfo::latest()->first();
        return view('site.services', ['lser' => $lser,'service' => $service,'product' => $product, 'siteinfo' => $siteinfo]);
        // return $service;
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

        $service = service::find($id);
        $product = product::latest()->limit(4)->get();
        $lser = service::latest()->limit(4)->get();
        $siteinfo = siteinfo::latest()->first();
        return view('site.service', ['lser' => $lser,'service' => $service,'product' => $product, 'siteinfo' => $siteinfo]);
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
