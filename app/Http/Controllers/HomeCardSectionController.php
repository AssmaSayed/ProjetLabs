<?php

namespace App\Http\Controllers;

use App\Models\HomeCardSection;
use Illuminate\Http\Request;

class HomeCardSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeCardSection = HomeCardSection::all();
        
        return view('backOffice/welcome/homeCardSection',compact('homeCardSection'));
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
     * @param  \App\Models\HomeCardSection  $homeCardSection
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCardSection $homeCardSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCardSection  $homeCardSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeCardSection::find($id);
        return view('backOffice/welcome/editHomeCardSection', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCardSection  $homeCardSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "icon" => "required",
            "titre" => "required",
            "text" => "required",
        ]);
        
        $update = HomeCardSection::find($id);
        $update->icon = $request->icon;
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->save();
        return redirect('/homeCard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCardSection  $homeCardSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $userDestroy = HomeCardSection::find($id);
        // $userDestroy->delete();
        // return redirect('/user');
    }
}
