<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productEnq;

class ProductEnqController extends Controller
{

    public function index()
    {
        $productEnq = productEnq::latest()->get();
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
            return response()->json(['data' => $data]);
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
