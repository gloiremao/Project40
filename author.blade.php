@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/author.css">
@stop

@section('include-js')
	
@stop


@section('content')
	@parent

	<div id="content-area">
		
		<div id="info-area" class="container cardview">
			
			<div class="row">
				<div id="author-card" class="col-md-2">
					<!-- Nav tabs -->
					<div id="profile">
						<img src="img/user.png">
						<p id="author-name">{{ $author }}</p>
					</div>
					
				</div>
				<div id="paper-list" class="col-md-10">
					<!-- Nav tabs -->
					<div class="col-md-12">
						<div class="page-header">
							<h4 id="show_serach_keywords">{{ trans('string.author-info', ['count' => count($papers)])}}</h4>
						</div>

						<div class="list-group">
							<?php 
								foreach ($papers as $paper) {
									echo "<a data-target='{$paper['id']}' target='_blank' href='view?id={$paper['id']}' class='list-group-item'>
										    <h4 class='list-group-item-heading'>{$paper['title']}</h4>
										    <p class='list-group-item-text authors-list'>{$paper['authors']}</p></a>";
								}
							?>
						</div>

					</div>

					
					
				</div>
			</div>
			
			
		</div>

	</div>

@stop
