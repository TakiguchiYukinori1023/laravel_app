<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        return view('contact.confirm', ['input' => $request]);
    }

    public function send()
    {
        return view('contact.thanks');
    }
}
