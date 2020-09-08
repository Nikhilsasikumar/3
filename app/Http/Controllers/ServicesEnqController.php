<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serviceEnq;
use App\provider;
use App\service;

class ServicesEnqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $serviceEnq = serviceEnq::latest()->join('services', 'services.id', '=', 'service_enqs.ser_cate')
            ->select(
                'services.service_name',
                'service_enqs.id',
                'service_enqs.service',
                'service_enqs.fullname',
                'service_enqs.phone',
                'service_enqs.place',
                'service_enqs.district',
                'service_enqs.message',
                'service_enqs.status',
                'service_enqs.created_at'
            )->get();

        return view('admin.enquery_services', ['serviceEnq' => $serviceEnq]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $serviceEnq = new serviceEnq();
        $serviceEnq->service = request('service');
        $serviceEnq->ser_cate = request('ser_cate');
        $serviceEnq->fullname = request('fullname');
        $serviceEnq->phone = request('phone');
        $serviceEnq->place = request('place');
        $serviceEnq->district = request('district');
        $serviceEnq->message = request('message');
        $serviceEnq->status = 'PENDING';
        $name = request('fullname');
        $serviceEnq->save();
        return view("site.thankyou", compact('name'));
        // return redirect()->route('/thankyou', ['name' => $name]);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (request()->ajax()) {
            $data = serviceEnq::findOrFail($id);
            $cid = $data->service;

            $provider = provider::latest()->where('provider_cate', $cid)->get();
            return response()->json(['data' => $data, 'provider' => $provider]);
        }
    }


    public function update(Request $request, $id)
    {
        $serviceEnq = serviceEnq::find($id);
        $serviceEnq->status = request('status');
        $serviceEnq->save();
        return redirect("/admin/enquery_services");
    }


    public function destroy($id)
    {
        //
    }
}
