<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use App\Mail\ActivationMail; // Assuming you have an ActivationMail class

class ActivationController extends Controller
{
    public function activate($token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();

        // Update user activation status
        $user->update([ // Assuming the User model has these fields
            'activation_token' => null,
            'activated_at' => now(),
        ]);

        // ... success message/redirect logic
    }
    public function resendActivationLink(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Generate a new activation token
        $token = Str::random(60);

        // Update the user's activation token
        $user->update(['activation_token' => $token]);

        // Generate a new activation URL
        $activationUrl = URL::temporarySignedRoute('activate', now()->addHours(24), ['token' => $token]);

        // Send the activation email
        Mail::to($user->email)->send(new ActivationMail($activationUrl));

        return redirect()->back()->with('message', 'Activation link resent. Please check your email.');
    }
}


