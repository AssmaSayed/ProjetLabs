<?php

namespace App\Http\Controllers;

use App\Models\HomeService;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeServices = HomeService::all();
        return view('backOffice/welcome/homeServices', compact('homeServices'));

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
     * @param  \App\Models\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function show(HomeService $homeService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeService::find($id);
        return view('backOffice/welcome/editHomeServices', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "icon" => "required",
            "services" => "required",
            "text" => "required",

        ]);
        
        $update = HomeService::find($id);
        $update->icon = $request->icon;
        $update->services = $request->services;
        $update->text = $request->text;
        $update->save();
        return redirect('/homeServices');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = HomeService::find($id);
        $destroy->delete();
        return redirect('/homeServices');
    }
}
