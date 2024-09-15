<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;  // Import the User model


class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        // validation
    
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
           
        ]);

        $user =User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
           
        ]);
       
        session(['user_id' => $user->id]);

// Retrieve data from session
         $userId = session('user_id');

        // auth()->attempt($request->only('email', 'password'));
        
        return redirect() -> route('dashboard'); 
    }
}
