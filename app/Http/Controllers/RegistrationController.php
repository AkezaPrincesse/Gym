<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
       
        return view('auth.register');
    }

    public function register(Request $request)
    {
       
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'useremail' => 'required|string|email|max:255|unique:users',
            'userpassword' => 'required|string|min:8',
        ]);

       
        $user = new User();
        $user->username = $validatedData['username'];
        $user->useremail = $validatedData['useremail'];
        $user->userpassword = bcrypt($validatedData['userpassword']); 
        $user->save();

        
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
