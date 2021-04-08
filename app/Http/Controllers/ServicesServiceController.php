<?php

namespace App\Http\Controllers;

use App\Models\ServicesService;
use App\Models\ServicesServicesCard;
use Illuminate\Http\Request;

class ServicesServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesServices = ServicesService::all();
        return view('backOffice/services/servicesServices', compact('servicesServices'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesService  $servicesService
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesService $servicesService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesService  $servicesService
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit = ServicesService::find($id);
        return view('backOffice/services/editServicesServices', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesService  $servicesService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validation = $request->validate([
            "icon" => "required",
            "services" => "required",
            "text" => "required",

        ]);
        
        $update = ServicesService::find($id);
        $update->icon = $request->icon;
        $update->services = $request->services;
        $update->text = $request->text;
        $update->save();
        return redirect('/servicesServices');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesService  $servicesService
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = ServicesService::find($id);
        $destroy->delete();
        return redirect('/servicesServices');

    }
}
