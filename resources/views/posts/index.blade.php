@extends('layouts.app')
@section('content')

<h1>Posts</h1>

@if(count($posts) > 0)

@foreach($posts as $post)
<div class="well">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="img-fluid rounded-circle" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md-8 col-sm_8">
    <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
</div>
</div>
</div>
@endforeach
{{$posts->links()}}
@else
<p>No Post found</p>
@endif
@endsection
