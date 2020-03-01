@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <hr>

        {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            @csrf
            {{ Form::hidden('_method', 'PUT') }}
            
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'form-control ', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('Body', 'Body')}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection