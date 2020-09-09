<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;

class AdminProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $product = product::latest()->get();
        return view('admin.products', ['product' => $product]);
        // return $product;
    }

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


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'product_name' => 'required',
            'product_disc' => 'required',
            'product_cate' => 'required',
            'product_photo' => 'image|nullable|max:1999'
        ]);
        //Handle File Upload
        if ($request->hasFile('product_photo')) {
            //GET File with Extension
            $fileNameWithExt = $request->file('product_photo')->getClientOriginalName();
            //GET Just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //GET just Ext
            $extention = $request->file('product_photo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extention;
            //upload Image
            $path = $request->file('product_photo')->storeAs('public/products_photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        return $fileNameToStore;
        $product = new product();
        $product->product_name = request('product_name');
        $product->product_disc = request('product_disc');
        $product->product_cate = request('product_cate');
        $product->product_photo = $fileNameToStore;
        $product->save();
        return redirect("/admin/products/table");
        // return request('product_name');
    }


    public function show($id)
    {
        //
    }


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

    public function destroy($id)
    {
        //
    }
}
