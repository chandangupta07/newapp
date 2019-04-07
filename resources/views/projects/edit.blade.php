@extends('layout')

@section('title','Home')

@section('content2')
    <a href="/projects">Create Project</a>
	<form method="post" action="/projects/{{$project->id}}">
		{{method_field('PATCH')}}
		{{csrf_field()}}
		<div>
			<input type="text" name="title" value="{{$project->title}}">
		</div>
		<div>
			<textarea name="description">{{$project->description}}</textarea>
		</div>
		<div>
			<button type="submit">Update Project</button>
		</div>

	</form>

	<form method="post" action="/projects/{{$project->id}}">
		@method("DELETE")
		@csrf
	<!-- same as above for method and token  -->

		<div>
			<button type="submit">Delete Project</button>
		</div>
		
	</form>
		

@endsection