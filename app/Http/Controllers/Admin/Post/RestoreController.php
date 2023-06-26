<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class RestoreController extends Controller
{
    public function __invoke(FilterRequest $request, $res){
        $posts = Post::withTrashed()->find($res)->restore();

        return redirect()->route('admin.post.index');
    }
}
