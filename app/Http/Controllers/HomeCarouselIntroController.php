<?php

namespace App\Http\Controllers;

use App\Models\HomeCarouselIntro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeCarouselIntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeCarouselIntro = HomeCarouselIntro::all();
        return view('backOffice/welcome/homeCarouselIntro', compact('homeCarouselIntro'));

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
     * @param  \App\Models\HomeCarouselIntro  $homeCarouselIntro
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCarouselIntro $homeCarouselIntro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCarouselIntro  $homeCarouselIntro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeCarouselIntro::find($id);
        return view('backOffice/welcome/editHomeCarouselIntro', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCarouselIntro  $homeCarouselIntro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            // "img" => "required",
            "text" => "required",

        ]);
        
        $update = HomeCarouselIntro::find($id);
        if ($request->img == null) {
            $request->img = $update->img;
        }else{
            Storage::put('public/img', $request->img);
            $update->img = $request->file('img')->hashName(); //hashName change le nom pour qu'il soit unique    

        }
        $update->text = $request->text;
        $update->save();
        return redirect('/homeCarouselIntro');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCarouselIntro  $homeCarouselIntro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = HomeCarouselIntro::find($id);
        $destroy->delete();
        return redirect('/homeServices');
    }
}
