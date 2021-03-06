<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\siteinfo;
use App\service;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::latest()->get();
        $siteinfo = siteinfo::latest()->first();
        $lser = service::latest()->limit(4)->get();
        return view('site.products', ['lser' => $lser,'product' => $product, 'siteinfo' => $siteinfo]);
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
        $product = product::find($id);
        $products = product::latest()->where('product_cate', $product->product_cate)->limit(5)->get();
        $siteinfo = siteinfo::latest()->first();
        $lser = service::latest()->limit(4)->get();
        return view('site.product', ['lser' => $lser,'product' => $product, 'siteinfo' => $siteinfo,'products' => $products]);
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
