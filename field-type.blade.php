@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/menu.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/field.js"></script>
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

	<div class="page-container">
	    
	    <div class="container">
	    	<div class="page-header">
			  	<h4 class="section-title"><i class="fa fa-file" aria-hidden="true"></i> {{ trans("string.techtype")}}</h4>
			</div>

	    	<ul id="data-nav" class="nav nav-tabs">
			  	<li role="presentation" class="active"><a data-target="IoT" class="link_btn"> IoT</a></li>
			  	<li role="presentation"><a data-target="Big Data" class="link_btn"> Big Data</a></li>
			  	<li role="presentation"><a data-target="數位製造" class="link_btn"> 數位製造</a></li>
			  	<li role="presentation"><a data-target="資訊安全" class="link_btn"> 資訊安全</a></li>
			  	<li role="presentation"><a data-target="Sensor Network" class="link_btn"> Sensor Network</a></li>
			  	<li role="presentation"><a data-target="CPS" class="link_btn"> CPS</a></li>
			  	<li role="presentation"><a data-target="工業網路" class="link_btn"> 工業網路</a></li>
			  	<li role="presentation"><a data-target="I4" class="link_btn"> I4</a></li>
			  	<li role="presentation"><a data-target="其它" class="link_btn"> 其它</a></li>
			</ul>

			<div id="show-papers" class="cardview">
				<!-- paper area -->
				<div class="page-header section-title">
					<h4 id="field-title" ></h4>
				</div>
				<div id="serach_results" class="list-group">
					

				</div>

				<!-- page index -->
				<div class="col-md-10">
					<nav >
					  <ul id="serach-nav" class="pagination">
					    
					  </ul>
					</nav>
				</div>

			</div>

	  	</div><!--/.container-->


	</div><!--/.page-container-->
@stop
