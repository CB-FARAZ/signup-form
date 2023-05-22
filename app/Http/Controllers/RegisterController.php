<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    //

    public function index()
    {
        // load the login blade

        return view('register');

    }


    /**
     * Authenticate user
     *
     * @param Request $request
     *
     * @return RedirectResponse
     *
     */
    public function register(Request $request)
    {
        $attributes = $request->validate([

            'email' => 'required|max:50',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'email' => $attributes['email'],
            'password' => Hash::make($attributes['password']),
            ''
        ]);

        auth()->login($user);

        Session::flash('success', 'User has been created successfully');

        return redirect()->route('home.laravel' , 'id');
    }



}
