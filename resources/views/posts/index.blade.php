@extends('layouts.app')
@section('content')
<div class="container">
<h1>Anime &amp; Manga Recommendations!</h1>

@if(count($posts) > 0)

@foreach($posts as $post)
<div class="card">
<div class="imgResize">
<img style="img-fluid rounded-circle" src="/storage/post_img/{{$post->post_img}}">
</div>
<h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}} recommended by {{$post->user->name}}</small>
</div>
</div>
@endforeach
{{$posts->links()}}
@else
<p>No Post found</p>
@endif
@endsection


