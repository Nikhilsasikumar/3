<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;

class AdminServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = service::latest()->get();
        return view('admin.services', ['service' => $service]);
        // return $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service()
    {
        $service = service::latest()->get();
        return view('admin.services_table', ['service' => $service]);
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
        $service = new service();
        $service->service_name = request('service_name');
        $service->service_disc = request('service_disc');
        $service->service_cate = request('service_cate');
        $service->service_photo = request('service_photo');
        $service->save();
        return redirect("/admin/services");
        // return request('service_name');
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

        // $blog = service::find($id);
        // return $blog;
        // return view('edite', ['blog' => $blog]);
        if (request()->ajax()) {
            $data = service::findOrFail($id);
            return response()->json(['data' => $data]);
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
        $service = service::find($id);
        $service->service_name = request('service_name');
        $service->service_disc = request('service_disc');
        $service->service_cate = request('service_cate');
        // $service->service_photo = request('service_photo');
        $service->save();
        return redirect("/admin/services");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = service::find($id);
        $service->delete();
        return redirect("/admin/services");
    }
}
