<?php

namespace App\Http\Controllers\Admin;
use \App\Http\Controllers\Controller;
use App\Models\Category;


class CreateController extends Controller
{
    public function __invoke() {
        $categories = Category::all();
        return view('admin.post.AdminPanelCreatePost', compact('categories'));
    }
}

