<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeTitreSpan;
use Illuminate\Http\Request;

class HomeTitreSpanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeTitreSpan = HomeTitreSpan::all();
        return view('backOffice/welcome/homeTitreSpan', compact('homeTitreSpan'));
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
     * @param  \App\Models\HomeTitreSpan  $homeTitreSpan
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTitreSpan $homeTitreSpan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTitreSpan  $homeTitreSpan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeTitreSpan::find($id);
        return view('backOffice/welcome/editHomeTitreSpan', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTitreSpan  $homeTitreSpan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "titre1" => "required",
            "titre2" => "required",
            "span" => "required",
        ]);
        $update = HomeTitreSpan::find($id);
        $update->titre1 = $request->titre1;
        $update->titre2 = $request->titre2;
        $update->span = $request->span;
        $update->save();
        return redirect('/homeTitreSpan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTitreSpan  $homeTitreSpan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = HomeTitreSpan::find($id);
        $destroy->delete();
        return redirect('/homeTitreSpan');
    }
}
