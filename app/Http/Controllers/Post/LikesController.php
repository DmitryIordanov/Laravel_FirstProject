<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class LikesController extends BaseController
{
    public function __invoke(Post $post) {
        $post->update(['likes' => $post->likes+1]);
        return redirect()->route('post.show', $post);
    }
}
