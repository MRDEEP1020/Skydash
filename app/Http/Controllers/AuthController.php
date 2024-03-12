<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash;
use App\Mail\ActivationMail; // Make sure to import the ActivationMail class at the top of your file
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;





class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();

            // if (!$user->active) {
            //     Auth::logout();
            //     return back()->withErrors(['username' => 'Your account is not active.']);
            // }

            // Authentication passed...
            return redirect()->intended('/');
        }

        return back()->withErrors(['username' => 'Invalid credentials']);
    }


    // Add other methods like register, logout, etc. as needed

    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6',

            'terms' => 'accepted',
        ], [
            'terms.accepted' => 'You must accept the terms and conditions.',
        ]);

        // Generate a unique activation token
        $token = Str::random(60);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'activation_token' => $token,
            'active' => false,
        ]);

        $activationUrl = URL::temporarySignedRoute('activate', now()->addHours(24), ['token' => $token]);

        Mail::to($user->email)->send(new ActivationMail($activationUrl));

        return redirect()->route('login')->with('message', 'An activation email has been sent to your email address. Please check your inbox.');


        // Redirect to the dashboard after successful registration
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect to the home page or any other page after logout
    }

    // Profile

    public function profile()
    {
        return view('profile');
    }

    // Contact

    public function contact()
    {
        return view('contact');
    }

    public function payment()
    {
        return view('payment');
    }

    
}
