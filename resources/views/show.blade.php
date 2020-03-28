@extends('layouts.base')
@section('content')
<center>
<h1>{{ $post->title }}</h1>
<p class="lead">{{ $post->description }}</p>
<a href="" class="btn btn-primary btn-sm">Edit post</a>
<button type="button" class="btn btn-danger btn-sm">Delete post</button>
</center>
@endsection