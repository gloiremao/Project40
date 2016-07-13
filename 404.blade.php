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
			  	<h3>網頁建置中</h3>   		
			  	<p>Sorry! 網頁建置中，按此<a href="/itri">回首頁</a></p>
			</div>
			<div id="logo404" class="cardview">
				
			</div>
		</div>
	</header>

@stop