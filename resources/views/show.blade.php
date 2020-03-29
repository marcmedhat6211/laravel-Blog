@extends('layouts.base')
@section('content')
<center>
    <h1>{{ $post->title }}</h1>
    <p class="lead">{{ $post->description }}</p>
    <button type="submit" href="{{route('posts.destroy',['postId' => $post->id])}}" class="btn btn-danger btn-sm">Delete post</button>
</center>
@endsection