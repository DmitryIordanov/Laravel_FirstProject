@extends('templates.main')
@section('content')

    <style>
        .pagination-main-block .pagination {
            justify-content: center;
        }

        .card-footer {
            display: flex;
            margin-top: auto;
            max-height: 50px;
        }
    </style>
    <div>
        <form action="{{ route('post.search') }}" method="post">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="input-group" style="margin: 25px auto; width: 500px">
                <input type="search" class="form-control rounded" placeholder="Search" name="search"
                       value="{{ old('search') }}"/>
                <button type="submit" class="btn btn-outline-primary" name="btn-search">Search</button>
            </div>
        </form>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($posts as $post)
            <div class="col">
                <a href="{{ route('post.show', $post->id) }}" style="text-decoration: none; color: #000;">
                    <div class="card h-100">
                        <img src="{{ $post->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Illuminate\Support\Str::limit($post->content, 150) }}</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><i class="far fa-thumbs-up fa-lg"></i> {{ $post->likes }}</p>
                            <small class="text-body-secondary" style="margin-left: auto;">Has been
                                added: {{ $post->created_at }}</small>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="mt-5 pagination-main-block">
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection
