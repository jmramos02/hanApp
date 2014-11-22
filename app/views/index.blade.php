@extends('template')

@section('head')
	{{HTML::style('css/bg.css')}}
@stop

@section('content')
	<div class = "row">
		<div class="col-md-12 desc">
			<h1 class = "my-title">hanApp</h1>
			<p>
				<button class = "btn btn-primary"> <a href="{{URL::to('index')}}" class = "my-button">Get Started</a></button>
			</p>
		</div>
	</div>
@stop