@extends('layouts.app')

@section('content')

@endsection
@extends('layout')

@section('title','Home')

@section('content2')

<h2> {{$foo}} Home</h2>
<ul>
	@foreach($tasks as $task)
		<li>{{$task}}</li>
	@endforeach
</ul>
@endsection