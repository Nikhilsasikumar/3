<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use App\category;

class AdminServicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $service = service::latest()->get();
        return view('admin.services', ['service' => $service]);
        // return $service;
    }
    public function service()
    {
        $service = service::latest()->join('categories', 'categories.id', '=', 'services.service_cate')
            ->select(
                'categories.cate_name',
                'services.id',
                'services.service_name',
                'services.service_disc',
                'services.service_cate',
                'services.service_photo',
                'services.created_at'
            )->get();
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
        $this->validate($request, [
            'service_name' => 'required',
            'service_disc' => 'required',
            'service_cate' => 'required',
            'service_photo' => 'image|nullable|max:1999'
        ]);
        //Handle File Upload
        if ($request->hasFile('service_photo')) {
            //GET File with Extension
            $fileNameWithExt = $request->file('service_photo')->getClientOriginalName();
            //GET Just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //GET just Ext
            $extention = $request->file('service_photo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extention;
            //upload Image
            $path = $request->file('service_photo')->storeAs('public/service_photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $service = new service();
        $service->service_name = request('service_name');
        $service->service_disc = request('service_disc');
        $service->service_cate = request('service_cate');
        $service->service_photo = $fileNameToStore;
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

        if (request()->ajax()) {

            $data = service::findOrFail($id)->join('categories', 'categories.id', '=', 'services.service_cate')
                ->select(
                    'categories.cate_name',
                    'services.id',
                    'services.service_name',
                    'services.service_disc',
                    'services.service_cate',
                    'services.service_photo',
                    'services.created_at'
                )->get();
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
