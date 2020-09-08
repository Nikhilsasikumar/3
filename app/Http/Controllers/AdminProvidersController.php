<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provider;
use App\category;

class AdminProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provider = provider::latest()->get();
        return view('admin.provider', ['provider' => $provider]);
        // return $provider;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
