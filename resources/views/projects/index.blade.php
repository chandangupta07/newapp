@extends('layout')

@section('title','Home')

@section('content2')
    <a href="/projects/create">Create Project</a>
	<h2>Projects</h2>
	@foreach($projects as $project)
		<li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
	@endforeach

@endsection