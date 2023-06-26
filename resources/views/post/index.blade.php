@extends('templates.main')
@section('content')
    <div>
        <form action="{{ route('post.search') }}" method="post">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="input-group" style="margin: 25px auto; width: 500px">
                <input type="search" class="form-control rounded" placeholder="Search" name="search" value="{{ old('search') }}"/>
                <button type="submit" class="btn btn-outline-primary" name="btn-search">Search</button>
            </div>
        </form>
    </div>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Post</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ Illuminate\Support\Str::limit($post->content, 200) }}</td>
                    <td>{{ $post->likes }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
