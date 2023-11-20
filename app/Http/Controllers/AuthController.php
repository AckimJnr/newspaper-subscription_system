<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! Auth::attempt($validated)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        $user = User::where('email', $validated['email'])->first();

        return response()->json([
            'access_token' => $user->createToken('auth_token')->plainTextToken,
            'token_type' => 'Bearer',
            'role' => $user->role->role ?? null,
            'account_id' => $user->account_id,
        ]);

    }


    public function signin(){
        return view ('pages.authentication.signin');
    }

    public function signup(){
        return view ('pages.authentication.signup');
    }

    public function logout()
    {
        Auth::logout();
    
        return redirect('signin');
    }

}
