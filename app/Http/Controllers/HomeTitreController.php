<?php

namespace App\Http\Controllers;

use App\Models\HomeTitre;
use Illuminate\Http\Request;

class HomeTitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeTitre= HomeTitre::all();
        return view('backOffice/welcome/homeTitre', compact('homeTitre'));

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
     * @param  \App\Models\HomeTitre  $homeTitre
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTitre $homeTitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTitre  $homeTitre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeTitre::find($id);
        return view('backOffice/welcome/editHomeTitre', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTitre  $homeTitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "titre" => "required",
        ]);
        $update = HomeTitre::find($id);
        $update->titre = $request->titre;
        $update->save();
        return redirect('/homeTitreSpan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTitre  $homeTitre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = HomeTitre::find($id);
        $destroy->delete();
        return redirect('/homeTitre');
    }
}
