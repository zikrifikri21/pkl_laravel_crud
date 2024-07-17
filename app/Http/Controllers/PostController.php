<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //read
    public function index()
    {
        $post = Post::all();
        return view('welcome', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        dd($request->all());

        $request->validate([
            'judul' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
        }

        Post::create([
            'title' => $request->judul,
            'content' => $request->content,
            'image' => $input['imagename']
        ]);

        return view('post.create');
    }
}
//crud
