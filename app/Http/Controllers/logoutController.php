<?php

namespace App\Http\Controllers;

use App\Models\User;
//use http\Env\Request;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class logoutController extends Controller
{

    protected function logout()
    {
        $userid = \auth()->user()->email;
        User::where('email' , $userid)->update([

            'status' => 'Inactive'

        ]);

          auth()->logout();

          return redirect('/');

    }

}
