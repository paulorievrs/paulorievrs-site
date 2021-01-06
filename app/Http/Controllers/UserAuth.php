<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserAuth extends Controller
{
    function login(Request $request)
    {
        if(!Auth::attempt($data = $request->only('email', 'password'))) {
            return redirect()->back()->with('response', 'Erro ao efetuar login');
        }
    }
}
