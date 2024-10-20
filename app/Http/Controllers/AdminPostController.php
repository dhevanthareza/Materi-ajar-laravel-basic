<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = PostModel::get();
        return view('admin.post', compact('posts'));
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
    public function edit(Request $request, $id)
    {
        $post = PostModel::where('id', $id)->first();
        return view('admin.post-edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->only(['title', 'subtitle', 'content']);
        PostModel::where('id', $id)->update($data);

        return redirect('/admin/post');
    }
    public function delete(Request $request, $id)
    {
        PostModel::where('id', $id)->delete();

        return redirect('/admin/post');
    }
}
