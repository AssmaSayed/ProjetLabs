<?php

namespace App\Http\Controllers;

use App\Models\HomePromotion;
use Illuminate\Http\Request;

class HomePromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePromotion = HomePromotion::all();
        return view('backOffice/welcome/homePromotion', compact('homePromotion'));
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
     * @param  \App\Models\HomePromotion  $homePromotion
     * @return \Illuminate\Http\Response
     */
    public function show(HomePromotion $homePromotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePromotion  $homePromotion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomePromotion::find($id);
        return view('backOffice/welcome/editHomePromotion', compact('edit'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePromotion  $homePromotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "titre" => "required",
            "text" => "required",
            "button" => "required",

        ]);
        
        $update = HomePromotion::find($id);
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->button = $request->button;
        $update->save();
        return redirect('/homePromotion');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePromotion  $homePromotion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = HomePromotion::find($id);
        $destroy->delete();
        return redirect('/homePromotion');


    }
}
