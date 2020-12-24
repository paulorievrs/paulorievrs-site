<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserAuth extends Controller
{
    function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if($email === null || $password === null || strlen($password) === 0 || strlen($email) === 0) {
            return redirect('/login')->with('response', 'Preencha todos os dados.');

        }

        $response = DB::table('users')->select('email')->where('email', $email)->where('password', $password)->first();
        if($response !== null) {

            $request->session()->put('user', $email);

            return redirect('/admin');

        } else {

            return redirect('/login')->with('response', 'Falha na autenticação.');

        }


    }

    function logout(Request $request)
    {
        $request->session()->forget('user');

        return redirect('/login');
    }
}
