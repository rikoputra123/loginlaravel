<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'username' => 'required|min:5|max:255|unique:users',
            'email' => ['required','unique:users','email:dns'],
            'password' => 'required|min:5|max:255'
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');

     }
}
