@extends('templates.main')
@section('content')
    <div style="margin-top: 30px; margin-bottom: 30px;">
        <h1 style="text-align: center">Create post</h1>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <textarea type="text" name="content" class="form-control" id="inputPassword3"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="text" name="image" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Likes</label>
                <div class="col-sm-10">
                    <input type="number" name="likes" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Published</label>
                <div class="col-sm-10">
                    <input type="number" name="is_published" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
