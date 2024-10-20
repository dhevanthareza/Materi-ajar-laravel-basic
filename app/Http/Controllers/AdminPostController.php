<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
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
    public function store(Request $request)
    {
        $data = $request->only(['title', 'subtitle', 'content']);
        PostModel::create($data);

        return redirect('/admin/post');
    }
    public function edit()
    {
        return view('admin.post-edit');
    }
}
