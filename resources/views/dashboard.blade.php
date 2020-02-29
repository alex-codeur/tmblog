@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary mb-3">Create Post</a>
                    <h5>Your Blog Posts</h5>

                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            @foreach($posts as $post)
                                <tbody>
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>
                                            {!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                @csrf
                                                
                                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            {!!Form::close() !!}  
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts !</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
