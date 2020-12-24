<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use App\Http\Controllers\Controller;

class MailController extends Controller
{

    public function index(Request $request)
    {

        Mailer::send(['text' => 'mail'], ['user' => 'teste'], function ($m) {
            $m->from('hello@app.com', 'Your Application');

            $m->to('prievrs@gmail.com', 'Paulo Rievrs')->subject('Your Reminder!');
        });
        echo "Basic Email Sent. Check your inbox.";

    }

}
