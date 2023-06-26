@extends('templates.admin')

@section('content')

    <div style="display: none">
        {{ $titlePage = 'Edit posts' }}
    </div>

    <div class="editForm">
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3" value="{{ $post->title }}">
                </div>
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <textarea type="text" name="content" class="form-control" id="inputPassword3">{{ $post->content }}</textarea>
                </div>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="text" name="image" class="form-control" id="inputPassword3" value="{{ $post->image }}">
                </div>
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Likes</label>
                <div class="col-sm-10">
                    <input type="number" name="likes" class="form-control" id="inputPassword3" value="{{ $post->likes }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Published</label>
                <div class="col-sm-10">
                    <input type="number" name="is_published" class="form-control" id="inputPassword3" value="{{ $post->is_published }}">
                </div>
                @error('is_published')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        @foreach($categories as $category)
                            <option
                                {{ $category->id === $post->category->id ? ' selected' : '' }}
                                value="{{ $category->id }}"
                            >
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tags</label>
                <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
                        @foreach($tags as $tag)
                            <option
                                @foreach($post->tags as $postTag)
                                    {{ $category->id === $postTag->id ? ' selected' : '' }}
                                @endforeach
                                value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>
                @error('tags')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
