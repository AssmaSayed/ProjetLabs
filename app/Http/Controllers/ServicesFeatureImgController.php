<?php

namespace App\Http\Controllers;

use App\Models\ServicesFeatureImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesFeatureImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesFeaturesImg = ServicesFeatureImg::all();
        return view('backOffice/services/servicesFeaturesImg', compact('servicesFeaturesImg'));

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
     * @param  \App\Models\ServicesFeatureImg  $servicesFeatureImg
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesFeatureImg $servicesFeatureImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesFeatureImg  $servicesFeatureImg
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit = ServicesFeatureImg::find($id);
        return view('backOffice/services/editServicesFeaturesImg', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesFeatureImg  $servicesFeatureImg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validation = $request->validate([
            // "img" => "required",

        ]);
        
        $update = ServicesFeatureImg::find($id);
        if ($request->img == null) {
            $request->img = $update->img;
        }else{
            Storage::put('public/img', $request->img);
            $update->img = $request->file('img')->hashName(); //hashName change le nom pour qu'il soit unique    

        }
        $update->save();
        return redirect('/servicesFeaturesImg');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesFeatureImg  $servicesFeatureImg
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = ServicesFeatureImg::find($id);
        $destroy->delete();
        return redirect('/servicesFeaturesImg');

    }
}
