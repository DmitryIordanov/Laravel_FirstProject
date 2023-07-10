<?php

namespace App\Http\Controllers\Post;

use App\Http\Filter\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request) {
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

        $posts = Post::orderBy('created_at', 'desc')->filter($filter)->paginate(6);

        return view('post.index', compact('posts'));
    }
}
