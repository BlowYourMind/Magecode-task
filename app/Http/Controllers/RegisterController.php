<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register-user');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
        ]);
        User::create($data);
        session()->flash('success', 'You have Successfully Registered');
        return redirect('/');
    }
}
