<?php

namespace App\Http\Controllers;

use App\Models\HomeTestimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeTestimonial = HomeTestimonial::all();
        return view('backOffice/welcome/homeTestimonial', compact('homeTestimonial'));
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
     * @param  \App\Models\HomeTestimonial  $homeTestimonial
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTestimonial $homeTestimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTestimonial  $homeTestimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeTestimonial::find($id);
        return view('backOffice/welcome/editHomeTestimonial', compact('edit'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTestimonial  $homeTestimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "text" => "required",
            // "img" => "required",
            "name" => "required",
            "role" => "required",

        ]);
        
        $update = HomeTestimonial::find($id);
        $update->text = $request->text;
        if ($request->img == null) {
            $request->img = $update->img;
        }else{
            Storage::put('public/img', $request->img);
            $update->img = $request->file('img')->hashName(); //hashName change le nom pour qu'il soit unique    

        }
        // Storage::put('public/img', $request->img);
        // $update->img = $request->file('img')->hashName(); //hashName change le nom pour qu'il soit unique
        $update->name = $request->name;
        $update->role = $request->role;
        $update->save();
        return redirect('/homeTestimonial');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTestimonial  $homeTestimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeTestimonial $homeTestimonial)
    {
        //
    }
}
