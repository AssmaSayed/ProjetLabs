<?php

namespace App\Http\Controllers;

use App\Models\ContactMainOffice;
use Illuminate\Http\Request;

class ContactMainOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactMainOffice = ContactMainOffice::all();
        return view('backOffice/contactMainOffice', compact('contactMainOffice'));

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
     * @param  \App\Models\ContactMainOffice  $contactMainOffice
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMainOffice $contactMainOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactMainOffice  $contactMainOffice
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit = ContactMainOffice::find($id);
        return view('backOffice/contactMainOffice', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactMainOffice  $contactMainOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "titre" => "required",
            "adresse1" => "required",
            "adresse2" => "required",
            "phone" => "required",
            "email" => "required",

        ]);
        
        $update = ContactMainOffice::find($id);
        $update->titre = $request->titre;
        $update->adresse1 = $request->adresse1;
        $update->adresse2 = $request->adresse2;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->save();
        return redirect('/contactMainOffice');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactMainOffice  $contactMainOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = ContactMainOffice::find($id);
        $destroy->delete();
        return redirect('/contactMainOffice');

    }
}
