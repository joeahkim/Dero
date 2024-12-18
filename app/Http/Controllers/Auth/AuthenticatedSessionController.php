<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    // Show the login form or redirect based on user role if logged in
    public function create()
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Redirect based on the user's role if the session is active
            if ($user->role === 'super-admin') {
                return redirect()->route('super-admin.dashboard');
            } elseif ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // Redirect other roles to a default page or logout
            Auth::logout();
            return redirect()->route('login')->withErrors(['error' => 'Unauthorized access']);
        }

        // If no active session, show the login form
        return view('auth.admin.login');
    }

    // Handle login request
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect based on the user's role after successful login
            if ($user->role === 'super-admin') {
                return redirect()->route('super-admin.dashboard');
            } elseif ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // If the user is neither admin nor super-admin, log them out and show an error
            Auth::logout();
            return back()->withErrors(['error' => 'Unauthorized access']);
        }

        // If credentials are invalid, show an error message
        return back()->withErrors(['error' => 'Invalid credentials']);
    }

    // Handle logout
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
