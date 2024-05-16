<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{7,12}$/',
            // Add more rules for other fields if needed
        ];

        // Custom error messages
        $messages = [
            'name.regex' => 'Please enter alphabetic characters only for Name.',
            'phone.regex' => 'Phone number must be between 7 to 12 digits.',
            // Add more custom error messages for other fields if needed
        ];

        // Validate the request
        $validatedData = $request->validate($rules, $messages);

        // If validation passes, continue with your logic, for example, saving data to the database
        // $user = User::create($validatedData);

        // Redirect back with success message or to a different page
        return redirect()->back()->with('success', 'User registered successfully!');
    }
}
