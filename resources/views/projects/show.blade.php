@extends('layout')

@section('title','Show')

@section('content2')
	<h2>Tilte:- {{$project->title}}</h2>
	<br><h3>Descrition:- {{$project->description}}</h3>
    <a href="/projects/{{$project->id}}/edit"><button>Edit</button></a>
    <br>
    @if($project->tasks->count())
	    <div>
	    	@foreach($project->tasks as $task)
		    	<form method="post" action="/tasks/{{$task->id}}">
		    		{{method_field('PATCH')}}
		    		{{csrf_field()}}
		    		<p>
		    		<input <?php if($task->completed){echo "checked";}else{echo ""; } ?> type="checkbox" name="completed" onchange="this.form.submit();" />
		    		{{$task->description}}
		    		</p>
		    		
		    	</form>
			@endforeach
	    </div>
    @endif
    <div>
    	<p><h2>Add Task</h2></p>
    	<form method="post" action="/projects/{{$project->id}}/tasks">
    		{{csrf_field()}}
    		<p><input style="width: 100%;" type="text" name="description" value=""></p>
    		<p><input type="submit" name="add_task" value="Add Task"></p>
    	</form>
    	@include('errors');
    </div>
@endsection