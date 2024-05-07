<?php

namespace App\Http\Controllers;
use App\Models\F1;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $posts = F1::all();
        return view("posts.index", ["name" => $posts]);
    }
}
