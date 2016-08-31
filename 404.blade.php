@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/master.blade.css">
	<link rel="stylesheet" type="text/css" href="css/404.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/script.js"></script>
@stop

@section('content')
	@parent

	<header>
		<div class="container">
			<div class="page-header">
			  	<h3>{{ trans('string.warning404')}}</h3>   		
			  	<p>{{ trans('string.warning_info')}}<a href="/itri">{{ trans('string.home')}}</a></p>
			</div>
			<div id="logo404" class="cardview">
				
			</div>
		</div>
	</header>

@stop