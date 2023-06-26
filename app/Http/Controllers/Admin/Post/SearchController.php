<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\SearchRequest;

class SearchController extends Controller
{
    public function __invoke(SearchRequest $request) {
        $data = $request->validated();

        if ($_SERVER['HTTP_REFERER'] == 'http://127.0.0.1:8000/admin/trash'){
            $route = 'admin.post.trash';
        }else{
            $route = 'admin.post.index';
        }

        return redirect()->route($route, 'content=' . $data['search']);
    }
}
