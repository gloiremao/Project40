@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/menu.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/script.js"></script>
@stop


@section('content')
	@parent
	

	<div id="search-wrapper">
		<div id="header-blur">
			<div class="container">
				<div class="row">
					@include('search_module')
			  		
				</div>
			</div>
		</div>	
	</div>

	<div id="content-area">
		
		<div id="info-area" class="container">
			
			<div id="trend-tab" class="info-tab">

				<div id="hot-paper" class="cardview">
					<div class="page-header">
					  	<h4 class="section-title"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i> {{ trans("string.popular")}}</h4>
					</div>
					<div class="list-group">
					  <?php 
								foreach ($papers as $paper) {
									echo "<a data-target='{$paper->id}' target='_blank' href='view?id={$paper->id}' class='list-group-item'>
										    <h4 class='list-group-item-heading'>{$paper->title}</h4>
										    <p class='list-group-item-text authors-list'>{$paper->authors}</p>
										    <p class='list-group-item-text'>";
									echo trans('string.views');
									echo ":{$paper->count}</p></a>";
								}
								
							?>
					</div>
				</div>

				<div id="hot-author" class="cardview info-tab">
					<div class="page-header">
					  	<h4 class="section-title"><i class="fa fa-user" aria-hidden="true"></i> {{ trans("string.hot_author")}}</h4>
					</div>
					<div class="list-group">
					  <?php 
								foreach ($authors as $author) {
									echo "<a href='author?id={$author->id}' class='list-group-item'>
										    <h4 class='list-group-item-heading'>{$author->name}</h4>
										    <p class='list-group-item-text'>";
									echo trans('string.views');
									echo ":{$paper->count}</p></a>";
								}
								
							?>
					</div>
				</div>

			</div>
	


		</div>

	</div>

@stop