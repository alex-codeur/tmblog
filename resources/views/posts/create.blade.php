@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <hr>

        {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control ', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('Body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection