<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use App\category;

class AdminServicesController extends Controller
{
    public function index()
    {
        $service = service::latest()->get();
        return view('admin.services', ['service' => $service]);
        // return $service;
    }
    public function service()
    {
        $service = service::latest()->get();
        $categories = category::latest()->get();
        return view('admin.services_table', ['service' => $service, 'categories' => $categories]);
        // return $service;
    }
    public function create()
    {
        //
    }
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
    public function show($id)
    {
        //
    }
    public function edit($id)
    {

        // $blog = service::find($id);
        // return $blog;
        // return view('edite', ['blog' => $blog]);
        if (request()->ajax()) {
            $data = service::findOrFail($id);
            $categories = category::latest()->get();
            return response()->json(['data' => $data, 'categories' => $categories]);
        }
    }
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
    public function destroy($id)
    {
        $service = service::find($id);
        $service->delete();
        return redirect("/admin/services");
    }
}
