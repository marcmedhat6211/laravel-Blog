@extends('layouts.base')
@section('content')
<h1 class="text-center mb-3">Posts</h1>	
        @foreach($posts as $post)
            <center>
				<a href="#">{{ $post->title }}</a>
				<br>							 -->
				<p class="lead">{{ $post->description }}</p>
				<a href="" class="btn btn-primary btn-sm">Edit post</a>
                <a href="" class="btn btn-primary btn-sm">Delete post</a>
				<hr>
            </center>
        @endforeach
@endsection
