<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthersController extends Controller
{
    //
    public function sigleauther($id)
    {
        return view('authers.show') ;
    }
}
