<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(\Request $request)
    {

        $users = User::all();

        return view('/users', [

            'users' => $users

        ]);

    }

//        public function index()
//    {
//
//        $totalUsersCount = User::all()->count();
//
//        $activeUsersCount = User::where('status', 'active')->count();
//
//        return view('/users', compact('activeUsersCount', 'totalUsersCount'));
//    }




}
