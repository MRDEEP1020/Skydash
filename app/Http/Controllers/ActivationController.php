<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use App\Mail\ActivationMail;

use Illuminate\Contracts\Mail\Mailable;

class ActivationController extends Controller
{
    public function activate(Request $request, $token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();

        // Update user activation status
        $user->update([
            'activation_token' => null,
            'activated_at' => now(),
        ]);

        // You can customize the activation success message or redirect to a different page
        return redirect()->route('login')->with('message', 'Your account has been activated. You can now log in.');
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


