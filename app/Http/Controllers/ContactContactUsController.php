<?php

namespace App\Http\Controllers;

use App\Models\ContactContactUs;
use Illuminate\Http\Request;

class ContactContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactContactUs = ContactContactUs::all();
        return view('backOffice/contactContactUs', compact('contactContactUs'));

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
     * @param  \App\Models\ContactContactUs  $contactContactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactContactUs $contactContactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactContactUs  $contactContactUs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactContactUs::find($id);
        return view('backOffice/editContactContactUs', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactContactUs  $contactContactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "titre" => "required",
            "text" => "required",

        ]);
        
        $update = ContactContactUs::find($id);
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->save();
        return redirect('/contactUs');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactContactUs  $contactContactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = ContactContactUs::find($id);
        $destroy->delete();
        return redirect('/contactUs');

    }
}
