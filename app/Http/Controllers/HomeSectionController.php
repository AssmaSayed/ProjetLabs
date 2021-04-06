<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeSection = HomeSection::all();
        return view('backOffice/welcome/homeSection', compact('homeSection'));

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
     * @param  \App\Models\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSection $homeSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeSection::find($id);
        return view('backOffice/welcome/editHomeSection', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            // "img" => "required",
            "name" => "required",
            "role" => "required",

        ]);
        
        $update = HomeSection::find($id);
        if ($request->img == null) {
            $request->img = $update->img;
        }else{
            Storage::put('public/img', $request->img);
            $update->img = $request->file('img')->hashName(); //hashName change le nom pour qu'il soit unique    
        }
        $update->name = $request->name;
        $update->role = $request->role;
        $update->save();
        return redirect('/homeSection');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = HomeSection::find($id);
        $destroy->delete();
        return redirect('/homeSection');
    }
}
