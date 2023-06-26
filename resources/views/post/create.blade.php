@extends('templates.admin')

@section('content')

    <div style="display: none">
        {{ $titlePage = 'Create posts' }}
    </div>

    <div class="createForm">
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3" value="{{ old('title') }}">
                </div>
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <textarea type="text" name="content" class="form-control" id="inputPassword3">{{ old('content') }}</textarea>
                </div>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="text" name="image" class="form-control" id="inputPassword3" value="{{ old('image') }}">
                </div>
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Likes</label>
                <div class="col-sm-10">
                    <input type="number" name="likes" class="form-control" id="inputPassword3" value="{{ old('likes') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Published</label>
                <div class="col-sm-10">
                    <input type="number" name="is_published" class="form-control" id="inputPassword3" value="{{ old('is_published') }}">
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
                                {{ old('category_id') == $category->id ? ' selected' : '' }}
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
                    <select class="form-select" multiple aria-label="multiple select example" name="tags">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>
                @error('tags')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

@endsection
