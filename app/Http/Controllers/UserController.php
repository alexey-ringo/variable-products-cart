<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class UserController extends Controller
{
    public function getUsername()
    {
        if(Auth::guard('web')->check()) {
        
            return response()->json(['userName' => Auth::user()->name]);
        }
         return response()->json('');
    }
}
