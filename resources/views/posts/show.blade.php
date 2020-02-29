@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-secondary">Go Back</a>
        <h1>{{ $post->title }}</h1>
        <div>
            {{ $post->title }}
        </div>
        <hr>
        <small class="font-weight-light" style="font-size: 15px;">written on {{ $post->created_at }}</small>
    </div>
@endsection