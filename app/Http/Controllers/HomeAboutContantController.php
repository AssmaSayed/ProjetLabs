<?php

namespace App\Http\Controllers;

use App\Models\HomeAboutContant;
use Illuminate\Http\Request;

class HomeAboutContantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbHomeAboutContant = HomeAboutContant::all();
        return view('pages.home', compact('dbHomeAboutContant'));
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
     * @param  \App\Models\HomeAboutContant  $homeAboutContant
     * @return \Illuminate\Http\Response
     */
    public function show(HomeAboutContant $homeAboutContant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeAboutContant  $homeAboutContant
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeAboutContant $homeAboutContant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeAboutContant  $homeAboutContant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeAboutContant $homeAboutContant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeAboutContant  $homeAboutContant
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeAboutContant $homeAboutContant)
    {
        //
    }
}
