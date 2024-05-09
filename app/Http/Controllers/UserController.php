<?php

namespace App\Http\Controllers;

use App\Models\F1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class F1Controller extends Controller
{
    public function index()
    {
        $posts = F1::all();
        return view("posts.index", ["name" => $posts]);
    }
}

class UserController extends Controller
{
    public function userInfo()
    {
        $user = Auth::user(); // Get the authenticated user

        // Pass the user data to the view
        return view('user-info', compact('user'));
    }
}