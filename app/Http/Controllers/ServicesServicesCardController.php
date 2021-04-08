<?php

namespace App\Http\Controllers;

use App\Models\ServicesServicesCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesServicesCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesServicesCard = ServicesServicesCard::all();
        return view('backOffice/services/servicesServicesCard', compact('servicesServicesCard'));

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
     * @param  \App\Models\ServicesServicesCard  $servicesServicesCard
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesServicesCard $servicesServicesCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesServicesCard  $servicesServicesCard
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit = ServicesServicesCard::find($id);
        return view('backOffice/services/editServicesServicesCard', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesServicesCard  $servicesServicesCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validation = $request->validate([
            // "img" => "required",
            "titre" => "required",
            "text" => "required",

        ]);
        
        $update = ServicesServicesCard::find($id);
        if ($request->img == null) {
            $request->img = $update->img;
        }else{
            Storage::put('public/img', $request->img);
            $update->img = $request->file('img')->hashName(); //hashName change le nom pour qu'il soit unique    
            
        }
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->save();
        return redirect('/servicesServicesCard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesServicesCard  $servicesServicesCard
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = ServicesServicesCard::find($id);
        $destroy->delete();
        return redirect('servicesServicesCard');
    }
}
