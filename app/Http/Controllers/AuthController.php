<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login(Request $request) {

        return view("auth.login");

    }

    public function postLogin (Request $request) {

        

    
        $credentials = [
            filter_var($request->name, FILTER_VALIDATE_EMAIL) ? 'email' : 'username' => $request->login,
            "password" => $request->password,
        ];


        



        if ( Auth::attempt( $credentials ) ) {

            $request->session()->regenerate();
            return redirect()->intended('manager');

        } 

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }


}
