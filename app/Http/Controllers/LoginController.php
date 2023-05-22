<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function index()
    {
        // load the login blade

        return view('login');

    }


    /**
     * Authenticate user
     *
     * @param Request $request
     *
     * @return RedirectResponse
     *
     */
    public function authenticateLoginRequest(Request $request)
    {


        // Validate input fields
        // Read: https://laravel.com/docs/10.x/validation
       $attributes =  $request->validate([
            'email' => 'required|max:50',
            'password' => 'required',
        ]);

        // it came here only if the request is validated
        // now check the email and password with database

        // Hint: select query?


        $user = User::where('email', $attributes['email'])->first();

        if (!$user || !Hash::check($attributes['password'], $user->password)) {

            return redirect()->back()->withErrors('These credentials do not match our records.');
        }

        auth()->login($user);

        Session::flash('success', 'User has been logged in successfully');

        return redirect()->route('home.index');
    }



        // the user is found, let's set a success message.
        // Read: https://laravel.com/docs/10.x/session#flash-data

        // now redirect to home page??



}
