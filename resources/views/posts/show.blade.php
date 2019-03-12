@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-primary">Go Back</a>
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on {{$post->created_at}}</small>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
	
	{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{FOrm::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!!Form::close()!!}
@endsection