<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\invitation;

class MailController extends Controller
{
    function sendMail()
    {
        $name = 'abd';
        Mail::to('fake@gmail.com')->send(new invitation($name));
    }
}
