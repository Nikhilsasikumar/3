<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::latest()->get();
        return view('admin.products', ['product' => $product]);
        // return $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product()
    {
        $product = product::latest()->join('categories', 'categories.id', '=', 'products.product_cate')
            ->select(
                'categories.cate_name',
                'products.id',
                'products.product_name',
                'products.product_disc',
                'products.product_cate',
                'products.product_photo',
                'products.created_at'
            )->get();
        $categories = category::latest()->get();
        return view('admin.products_table', ['product' => $product, 'categories' => $categories]);
        // return $product;
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
        $product = new product();
        $product->product_name = request('product_name');
        $product->product_disc = request('product_disc');
        $product->product_cate = request('product_cate');
        $product->product_photo = request('product_photo');
        $product->save();
        return redirect("/admin/products/table");
        // return request('product_name');
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
        if (request()->ajax()) {
            // $data = product::findOrFail($id);
            $data = product::findOrFail($id)->join('categories', 'categories.id', '=', 'products.product_cate')
                ->select(
                    'categories.cate_name',
                    'products.id',
                    'products.product_name',
                    'products.product_disc',
                    'products.product_cate',
                    'products.product_photo',
                    'products.created_at'
                )->get();
            $categories = category::latest()->get();
            return response()->json(['data' => $data, 'categories' => $categories]);
        }
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
        $product = product::find($id);
        $product->product_name = request('product_name');
        $product->product_disc = request('product_disc');
        $product->product_cate = request('product_cate');
        // $product->product_photo = request('product_photo');
        $product->save();
        return redirect("/admin/products/table");
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
