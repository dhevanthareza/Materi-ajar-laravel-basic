<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = PostModel::get();
        return view('index', compact('posts'));
    }
}
