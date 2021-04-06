<?php

namespace App\Http\Controllers;

use App\Models\HomeCarousel;
use Illuminate\Http\Request;

class HomeCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeCarousel= HomeCarousel::all();
        return view('backOffice/welcome/homeCarousel', compact('homeCarousel'));

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
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCarousel $homeCarousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeCarousel::find($id);
        return view('backOffice/welcome/editHomeCarousel', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "img1" => "required",
            "img2" => "required",
        ]);
        
        $update = HomeCarousel::find($id);
        $update->img1 = $request->img1;
        $update->img2 = $request->img2;
        $update->save();
        return redirect('/homeCarousel');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    {
        $destroy = HomeCarousel::find($id);
        $destroy->delete();
        return redirect('/homeCarousel');
     }
    
    
}
