<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        
        $rules = [
            'name' => 'required|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{7,12}$/',

        ];

        
        $messages = [
            'name.regex' => 'Please enter alphabetic characters only for Name.',
            'phone.regex' => 'Phone number must be between 7 to 12 digits.',

        ];

        $validatedData = $request->validate($rules, $messages);
        return redirect()->back()->with('success', 'User registered successfully!');
    }
}
