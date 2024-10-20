<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.post');
    }
    public function create()
    {
        return view('admin.post-create');
    }
    public function edit()
    {
        return view('admin.post-edit');
    }
}
