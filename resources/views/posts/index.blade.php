@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts<h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="jumbotron p-0">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="max-height: 200px;" class="w-100" src="/storage/cover_images/{{ $post->cover_image }}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                            <p class="font-weight-light" style="font-size: 15px;">written on {{ $post->created_at }} by {{$post->user->name}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $posts->links() }}
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection