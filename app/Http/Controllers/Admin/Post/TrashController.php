<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filter\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class TrashController extends Controller
{
    public function __invoke(FilterRequest $request){
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

        $posts = Post::orderBy('created_at', 'desc')->filter($filter)->onlyTrashed()->paginate(15);

        return view('admin.post.trash', compact('posts'));
    }
}
