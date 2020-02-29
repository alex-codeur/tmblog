@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <hr>

        {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
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
            {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection