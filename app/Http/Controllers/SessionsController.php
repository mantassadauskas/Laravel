<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view ('sessions.login');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect ('/driver');
    }

}
