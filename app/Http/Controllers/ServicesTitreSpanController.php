<?php

namespace App\Http\Controllers;

use App\Models\ServicesTitreSpan;
use Illuminate\Http\Request;

class ServicesTitreSpanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesTitreSpan = ServicesTitreSpan::all();
        return view('backOffice/services/servicesTitreSpan', compact('servicesTitreSpan'));

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
     * @param  \App\Models\ServicesTitreSpan  $servicesTitreSpan
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesTitreSpan $servicesTitreSpan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesTitreSpan  $servicesTitreSpan
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit = ServicesTitreSpan::find($id);
        return view('backOffice/services/editServicesTitreSpan', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesTitreSpan  $servicesTitreSpan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validation = $request->validate([
            "titre1" => "required",
            "titre2" => "required",
            "span" => "required",
        ]);
        $update = ServicesTitreSpan::find($id);
        $update->titre1 = $request->titre1;
        $update->titre2 = $request->titre2;
        $update->span = $request->span;
        $update->save();
        return redirect('/servicesitreSpan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesTitreSpan  $servicesTitreSpan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = ServicesTitreSpan::find($id);
        $destroy->delete();
        return redirect('/servicesTitreSpan');

    }
}
