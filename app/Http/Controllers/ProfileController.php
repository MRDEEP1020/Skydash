<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    //
public function updateProfile(Request $request)
{
    $request->validate([
        'company' => 'string|max:255',
        'job' => 'string|max:255',
        'country' => 'required|string|min:6',
        'about' => 'string|max:255',
        'address' => 'required|string|min:6',
        'phone' => 'required|int|max:9',
        'twitter' => 'string|max:255',
        'facebook' => 'string|max:255',
        'instagram' => 'string|max:255',
        'linkedin' => 'string|max:255',
    ]);

    
    $user = auth()->user();
    $profile = $user->profile; // Retrieve associated profile

    

    if ($request->has('password')) { // Update password if provided
        $profile->password = Hash::make($request->input('password'));
        $profile->saveOrFail(); // Replace with this line
    }

    // Update profile details
    $profile= Profile::create([        
        'company' => $request->input('company'),
        'job' => $request->input('job'),
        'country' => $request->input('country'),
        'about' => $request->input('about'),
        'address' => $request->input('address'),
        'phone' => $request->input('phone'),
        'twitter' => $request->input('twitter'),
        'facebook' => $request->input('facebook'),
        'instagram' => $request->input('instagram'),
        'linkedin' => $request->input('linkedin'),
    ]);

    return redirect()->route('profile'); // Redirect to profile page after update
}





    public function changePassword(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required|string',
            'newPassword' => 'required|string|min:8',
            'renewPassword' => 'required|string|same:newPassword',
        ]);

        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        if (!Hash::check($request->input('currentPassword'), $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        $user->password = Hash::make($request->input('newPassword'));




        return redirect()->back()->with('success', 'Password changed successfully.');
    }
}
