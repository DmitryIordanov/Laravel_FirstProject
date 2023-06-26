<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\SearchRequest;

class SearchController extends BaseController
{
    public function __invoke(SearchRequest $request) {
        $data = $request->validated();

        return redirect()->route('post.index', 'content=' . $data['search']);
    }
}
