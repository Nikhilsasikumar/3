<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provider;
use App\category;

class AdminProvidersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $provider = provider::latest()->get();
        return view('admin.provider', ['provider' => $provider]);
        // return $provider;
    }

    public function provider()
    {
        $provider = provider::latest()->join('categories', 'categories.id', '=', 'providers.provider_cate')
            ->select(
                'categories.cate_name',
                'providers.id',
                'providers.provider_name',
                'providers.provider_disc',
                'providers.provider_field',
                'providers.provider_cate',
                'providers.provider_photo',
                'providers.created_at'
            )->get();
        $categories = category::latest()->get();
        return view('admin.provider_table', ['provider' => $provider, 'categories' => $categories]);
        // return $provider;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $provider = new provider();
        $provider->provider_name = request('provider_name');
        $provider->provider_field = request('provider_field');
        $provider->provider_disc = request('provider_disc');
        $provider->provider_cate = request('provider_cate');
        $provider->provider_photo = request('provider_photo');
        $provider->save();
        return redirect("/admin/providers/table");
        // return request('provider_name');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        if (request()->ajax()) {
            $data = provider::findOrFail($id)->join('categories', 'categories.id', '=', 'providers.provider_cate')
                ->select(
                    'categories.cate_name',
                    'providers.id',
                    'providers.provider_name',
                    'providers.provider_disc',
                    'providers.provider_field',
                    'providers.provider_cate',
                    'providers.provider_photo',
                    'providers.created_at'
                )->get();
            $categories = category::latest()->get();
            return response()->json(['data' => $data, 'categories' => $categories]);
        }
    }


    public function update(Request $request, $id)
    {
        $provider = provider::find($id);
        $provider->provider_name = request('provider_name');
        $provider->provider_field = request('provider_field');
        $provider->provider_disc = request('provider_disc');
        $provider->provider_cate = request('provider_cate');
        // $product->product_photo = request('product_photo');
        $provider->save();
        return redirect("/admin/providers/table");
    }


    public function destroy($id)
    {
        //
    }
}
