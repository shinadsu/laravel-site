<?php

namespace App\Http\Controllers\Admin;
use \App\Http\Controllers\Controller;
use App\Models\Post;


class indexController extends Controller
{
    public function __invoke() {
      $posts = Post::paginate(4);

        return view('admin.post.index', compact('posts'));
        
    }
}
