@extends('layouts.base')
@section('content')
<h1 class="text-center mb-3">Posts</h1>
	@if($posts)
        @foreach($posts as $post)
            <center>
				<p class="lead">{{ $post->title }}</p>				
				<p class="lead">{{ $post->description }}</p>
				<h6>{{ $post->created_at }}</h6>
				<a href="{{route('posts.show',['post' => $post->id])}}" class="btn btn-primary btn-sm">Show post</a>
				<a href="" class="btn btn-primary btn-sm">Edit post</a>
				<button type="submit" href="{{route('posts.destroy',['postId' => $post->id])}}" class="btn btn-danger btn-sm">Delete post</button>
				<hr>
            </center>
        @endforeach
	@else
		<h3>no posts available</h3>
	@endif
@endsection
