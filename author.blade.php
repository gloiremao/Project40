@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/author.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/author.js"></script>
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
						<p id="author-name">王大明</p>
					</div>
					
				</div>
				<div id="paper-list" class="col-md-10">
					<!-- Nav tabs -->
					<div class="col-md-12">
						<div class="page-header">
							<h4 id="show_serach_keywords">{{ trans('string.author-info')}}</h4>
						</div>

						<div id="serach_results" class="list-group">
				
				
						</div>

						<div class="col-md-10">
							<nav >
							  <ul id="serach-nav" class="pagination">
							    
							  </ul>
							</nav>
						</div>

					</div>

					
					
				</div>
			</div>
			
			
		</div>

	</div>

@stop
