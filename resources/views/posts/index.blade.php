@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts<h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="jumbotron">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <p class="font-weight-light" style="font-size: 15px;">written on {{ $post->created_at }} by {{$post->user->name}}</p>
                </div>
            @endforeach

            {{ $posts->links() }}
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection