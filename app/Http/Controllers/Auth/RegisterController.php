<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     */

    //TODO: FIXED, this is the way
    protected function store()
    {
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(
            [
                'name' => request('first_name') . ' ' . request('last_name'),
                'email' => request('email'),
                'password' => request('password'),
                'google_id' => '',
            ]
        );

        if ($user) {
            return redirect()->back()->with('success', 'You have been Registered Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
