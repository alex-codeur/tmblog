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
        <hr>

         {!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST'])!!}
            {{Form::hidden('_method','DELETE')}}
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" style="float:right">Delete</button>   
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm" style="float:left" >Edit</a>
        {!!Form::close() !!}  
    </div>
@endsection