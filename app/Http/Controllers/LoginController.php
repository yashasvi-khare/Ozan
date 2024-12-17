<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the correct User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the registration form
     */
    public function showRegistration()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        // dd($request->All());
        $user = User::where('email', $request->email)->first();

        if ($user && password_verify($request->password, $user->password)) {
            // Manually log the user in
            Auth::login($user);

            // Redirect to the intended page or dashboard
            return redirect()->route('getIndex');
        } else {
            dd('login nahi hua');
        }

    }

    /**
     * Handle the registration process
     */
    public function register(Request $request)
    {
        //dd($request->all());
        // Validate the request data
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|string|min:6|confirmed', // Ensure password confirmation field is used
        // ]);

        // Create the user in the database
        $user = User::create([ // Use the correct User model
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
        ]);

        // Redirect to login or another page
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }


}





