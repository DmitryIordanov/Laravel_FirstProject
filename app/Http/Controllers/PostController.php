<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function create() {
        $postsArr = [
            [
                'title' => 'Update first post title',
                'content' => 'Lorem inpus, and ttd storm a last wather shot me add lost534',
                'image' => 'image',
                'likes' => 12,
                'is_published' => 1,
            ],
            [
                'title' => 'Update second post title',
                'content' => 'Lorem inpus, and ttd storm a last wather shot me add lost3453',
                'image' => 'image',
                'likes' => 32,
                'is_published' => 1,
            ],
            [
                'title' => 'Update three post title',
                'content' => 'Lorem inpus, and ttd storm a last wather shot me add lost324523',
                'image' => 'image',
                'likes' => 47,
                'is_published' => 1,
            ],
            [
                'title' => 'Update four post title',
                'content' => 'Lorem inpus, and ttd storm a last wather shot me add lost4564',
                'image' => 'image',
                'likes' => 15,
                'is_published' => 0,
            ],
            [
                'title' => 'Update five post title',
                'content' => 'Lorem inpus, and ttd storm a last wather shot me add lost2345324',
                'image' => 'image',
                'likes' => 65,
                'is_published' => 0,
            ],
            [
                'title' => 'Update six post title',
                'content' => 'Lorem inpus, and ttd storm a last wather shot me add lost234532',
                'image' => 'image',
                'likes' => 26,
                'is_published' => 1,
            ],
        ];

        foreach ($postsArr as $item){
            Post::create($item);
        }

        dd('create');
    }

    public function update() {
        $post = Post::find(5);
        $post->update([
            'title' => 'Update five post title'
        ]);
        dd('Post update!');
    }

    public function delete() {
        $post = Post::find(6);
        $post->delete();
        dd('Post delete!');
    }

    public function restore() {
        $post = Post::withTrashed()->find(6);
        $post->restore();
        dd('Post restore!');
    }

    public function FirstOrCreate() {
        $post = Post::firstOrCreate([
            'title' => 'New post first or create posts',
        ],[
            'title' => 'New post first or create posts',
            'content' => 'Lorem inpus, and ttd storm a New post first or create posts534',
            'image' => 'image',
            'likes' => 1123,
            'is_published' => 1,
        ]);
        dump($post->content);
    }

    public function UpdateOrCreate() {
        $post = Post::updateOrCreate([
            'title' => 'New post update or create posts',
        ],[
            'title' => 'New post update or create posts',
            'content' => 'Lorem inpus, and ttd storm a New post update or create posts534',
            'image' => 'image',
            'likes' => 75,
            'is_published' => 1,
        ]);
        dump($post->content);
    }
}
