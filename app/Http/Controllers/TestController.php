<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function sendTestEmail()
    {
        Mail::raw('Test email', function ($message) {
            $message->to('moustaphakolbassia10@example.com');
            $message->subject('Test Email');
        });

        return 'Test email sent successfully!';
    }
}
