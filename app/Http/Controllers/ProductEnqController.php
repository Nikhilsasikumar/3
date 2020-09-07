<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productEnq;
use App\provider;

class ProductEnqController extends Controller
{

    public function index()
    {
        // $productEnq = productEnq::latest()->get();



        $productEnq = productEnq::latest()->join('products', 'products.id', '=', 'product_enqs.product')
            ->select(
                'products.product_name',
                'product_enqs.id',
                'product_enqs.fullname',
                'product_enqs.phone',
                'product_enqs.place',
                'product_enqs.district',
                'product_enqs.message',
                'product_enqs.status',
                'product_enqs.qty',
                'product_enqs.created_at'
            )->get();
        return view('admin.enquery_products', ['productEnq' => $productEnq]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $productEnq = new productEnq();
        $productEnq->product = request('product');
        $productEnq->fullname = request('fullname');
        $productEnq->phone = request('phone');
        $productEnq->place = request('place');
        $productEnq->district = request('district');
        $productEnq->message = request('message');
        $productEnq->status = 'PENDING';
        $productEnq->qty = request('qty');
        $name = request('fullname');
        $productEnq->save();
        return view("site.thankyou", compact('name'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        if (request()->ajax()) {
            $data = productEnq::findOrFail($id);
            $cid = $data->product;
            $provider = provider::latest()->where('provider_cate', $cid)->get();
            return response()->json(['data' => $data, 'provider' => $provider]);
        }
    }


    public function update(Request $request, $id)
    {
        $productEnq = productEnq::find($id);
        $productEnq->status = request('status');
        $productEnq->save();
        return redirect("/admin/enquery_products");
    }


    public function destroy($id)
    {
        //
    }
}
