<?php

namespace App\Http\Controllers;

use App\Models\ContactPlaceholder;
use Illuminate\Http\Request;

class ContactPlaceholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactPlaceholder = ContactPlaceholder::all();
        return view('backOffice/contactPlaceholder', compact('contactPlaceholder'));

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
     * @param  \App\Models\ContactPlaceholder  $contactPlaceholder
     * @return \Illuminate\Http\Response
     */
    public function show(ContactPlaceholder $contactPlaceholder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactPlaceholder  $contactPlaceholder
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit = ContactPlaceholder::find($id);
        return view('backOffice/contactPlaceholder', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactPlaceholder  $contactPlaceholder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validation = $request->validate([
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required",

        ]);
        
        $update = ContactPlaceholder::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->subject = $request->subject;
        $update->message = $request->message;
        $update->save();
        return redirect('/contactPlaceholder');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactPlaceholder  $contactPlaceholder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ContactPlaceholder::find($id);
        $destroy->delete();
        return redirect('/contactPlaceholder');
    }
}
