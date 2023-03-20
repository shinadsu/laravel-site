<?php

namespace App\Http\Controllers\Admin;
use \App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;


class StoreInDatabaseController extends Controller
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();
        Post::create($data);

        return redirect()->route('admin.index');
    }
}
