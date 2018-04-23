@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, {{ Auth::user()->name }}
                    @component('components.user')
                    @endcomponent 
                    <hr>
                    <a href="/post/create" class="btn btn-primary">Create Post</a>
                    @if(count($posts) >0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/post/{{$post->id}}/edit" class="btn btn-success">Edit</a></td>
                        <td>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id ], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}</td>
                        </tr>


                        @endforeach
                    </table>
                    @else
                    <p>You currently have no posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
