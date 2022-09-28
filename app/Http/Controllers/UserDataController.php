<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index( Request $request) {

        $user = $request->user();
        return view('user-data.userdata', ['user' => $user]);
    }
}
