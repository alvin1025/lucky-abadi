

@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title}}</h1>
                <small><p>By. <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }} </a>  </p></small>
                @if ($post->image)
                <div style="max-height: 300px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                    <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                
                <article class="my-3">
                    {!! $post->body !!}
                </article>
                
                

                <a href="/post">Back To Post</a>
            </div>
        </div>
    </div>
    
        {{-- <article>
            <h2>{{ $post->title}}</h2>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
            
        <p>
           {!! $post->body !!}
        </p>
        </article>

    
        <a href="/post">Back To Post</a> --}}
@endsection





   

     
