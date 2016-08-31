@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/default.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/script.js"></script>
@stop


@section('content')
	@parent
	<header>
		<div id="header-blur">
			<div class="container">
				<div class="row">
					<div id="top-intro" class="col-md-8 col-md-offset-2">
						<img id="top-logo" src="img/logo.png">
			            <h1 class="brand-heading">{{ trans('string.title') }}</h1>
			        </div>
					@include('search_module')
			  		
				</div>
			</div>
		</div>	
	</header>

	<div id="banner" class="container">
		<div id="statistic" class="cardview">
			<h4 >
				<i class="fa fa-bullhorn" aria-hidden="true"></i> {{ trans('string.welcome-msg', ['count' => $paperCount]) }}
			</h4>
		</div>
	</div>

	<div id="content-area">
		
		<div id="info-area" class="container">
			
			<div id="new-tab" class="cardview info-tab">
				<div class="page-header">
				  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> {{ trans('string.new') }}</h4>
				</div>
				<div class="list-group">
				  	<?php 
						foreach ($papers as $paper) {
							echo "<a data-target='{$paper->id}' target='_blank' href='view?id={$paper->id}' class='list-group-item'>
								    <h4 class='list-group-item-heading'>{$paper->title}</h4>
								    <p class='list-group-item-text authors-list'>{$paper->authors}</p>
								  </a>";
						}
					?>
				</div>
			</div>

			
		</div>

	</div>

@stop