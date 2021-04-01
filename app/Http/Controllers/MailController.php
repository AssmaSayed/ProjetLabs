<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request ){
        Mail::to("assma@trap.com")->send(new MailSend($request));
        return redirect()->back();
    }
}