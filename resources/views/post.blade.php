

@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }} </h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/post" method="get">
                @if (request('category'))
                    <input type="hidden" name='category' value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name='author' value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count() > 0)
        <div class="card mb-3">
        <img src="https://source.unsplash.com/random/500x300?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/post/{{ $posts[0]["slug"] }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>{{ $posts[0]->title }}</h3>
          <small><p>By. <a href="/post?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/post?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }} </p></small>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/post/{{ $posts[0]["slug"] }}" class="text-decoration-none btn btn-primary">Read More</a>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 ", style="background-color: rgba(0, 0, 0, 0.7)"><a href="/post?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/random/300x200?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <small><p>By. <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }} </p></small>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/post/{{ $post["slug"] }}" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
       <p class="text-center fs-4">Post Not Found.</p> 
    @endif
    <div class="d-flex justify-content-end">
    {{ $posts->links() }}
    </div>
    {{-- @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/post/{{ $post["slug"] }}" class="text-decoration-none">
                {{ $post->title }}
            </a>
        </h2>
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }} </a> </p>
        <p>
            {{ $post->excerpt }}
        </p>

        <a href="/post/{{ $post["slug"] }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach --}}
@endsection
        
     
