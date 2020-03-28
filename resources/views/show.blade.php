@extends('layouts.base')
@section('content')
<center>
<h1>{{ $post->title }}</h1>
<p class="lead">{{ $post->description }}</p>
<!-- <a href="likes" class="btn btn-primary btn-sm float-left">Like</a>
<a href="" class="btn btn-primary btn-sm float-left">Dislike</a> -->
</center>
@endsection