@extends('layout')

@section('title','Home')

@section('content2')
    <a href="/projects">Create Project</a>
	<form method="post" action="/projects">
		{{csrf_field()}}
		<div>
			<input type="text" name="title" value="{{old('title')}}">
		</div>
		<div>
			<textarea name="description">{{old('description')}}</textarea>
		</div>
		<div>
			<button type="submit">Add Project</button>
		</div>

	</form>
    @include('errors');
@endsection