<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serviceEnq;
use App\provider;
use App\service;

class ServicesEnqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceEnq = serviceEnq::latest()->join('services', 'services.id', '=', 'service_enqs.service')
            ->select(
                'services.service_name',
                'service_enqs.id',
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
        $serviceEnq = new serviceEnq();
        $serviceEnq->service = request('service');
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
