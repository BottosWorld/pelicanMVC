<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $users = User::all();
        $users = [
            [
                'name' => 'bryan',
                'email' => 'test@gmail.com',
            ],
            [
                'name' => 'bryan2',
                'email' => 'test2@gmail.com',
            ]
        ];
        return view('users', ['users' => $users]);
    }
}
