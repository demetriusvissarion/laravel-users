<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        // select * from users
        $users = User::all();

        // return $users;

        return view('users/index', compact('users'));
    }
}
