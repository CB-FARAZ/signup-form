<?php

namespace App\Http\Controllers;

class logoutController extends Controller
{
    public function logout()
    {

          auth()->logout();

          return redirect('/');

    }

}
