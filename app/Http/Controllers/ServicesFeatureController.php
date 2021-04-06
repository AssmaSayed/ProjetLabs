<?php

namespace App\Http\Controllers;

use App\Models\ServicesFeature;
use Illuminate\Http\Request;

class ServicesFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesFeatures = ServicesFeature::all();
        return view('backOffice/services/servicesFeatures', compact('servicesFeatures'));

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
     * @param  \App\Models\ServicesFeature  $servicesFeature
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesFeature $servicesFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesFeature  $servicesFeature
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ServicesFeature::find($id);
        return view('backOffice/services/editServicesFeatures', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesFeature  $servicesFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validation = $request->validate([
            "titre" => "required",
            "text" => "required",
            "icon" => "required",

        ]);
        
        $update = ServicesFeature::find($id);
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->icon = $request->icon;
        $update->save();
        return redirect('/servicesFeatures');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesFeature  $servicesFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = ServicesFeature::find($id);
        $destroy->delete();
        return redirect('/servicesFeatures');

    }
}
