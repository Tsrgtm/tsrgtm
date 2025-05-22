<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $user = User::firstOrFail();

        if (!$user) {
            $user = User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
            $user = User::where('email', 'admin@admin.com')->first();
        }

        if ($request->password !== env('ADMIN_PASSWORD')) {
            return back()->withErrors(['password' => 'The password is incorrect']);
        }

        auth()->login($user);

        return redirect()->route('admin.index');

    }

    public function logout()
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();

        return redirect('/login');
    }
}
