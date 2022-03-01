<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function create(Request $request)
    {
        return view('posts.create');
    }
}
