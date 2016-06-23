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
	<div id="header-blur" class="container">
		<div class="row">
			<div id="top-intro" class="col-md-8 col-md-offset-2">
				<img id="top-logo" src="img/logo.png">
	            <h1 class="brand-heading">生產力 4.0 知識庫</h1>
	        </div>
			<div id="search-area" class="col-md-8 col-md-offset-2">
	    		<div class="input-group input-group-lg">
	      			<input id="input-search" type="text" class="form-control" placeholder="搜尋..." onkeypress="return onEnterPress(event)">
	      			<span class="input-group-btn">
	        			<button id="search_btn" class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
	      			</span>
	    		</div><!-- /input-group -->
	  		</div><!-- /.col-lg-6 -->
		</div>
	</div>	
</header>



<div id="content-area">
	
	<div id="info-area" class="container">

		<div id="hot-paper" class="cardview">
			<div class="page-header">
			  	<h4 class="section-title"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i> 熱門文章</h4>
			</div>
			<div class="list-group">
			  <?php 
						foreach ($papers as $paper) {
							echo "<a data-target='{$paper->id}' href='view?id={$paper->id}' class='list-group-item'>
								    <h4 class='list-group-item-heading'>{$paper->title}</h4>
								    <p class='list-group-item-text'>{$paper->authors}</p>
								  </a>";
						}
						
					?>
			</div>
		</div>

		
		<div id="new-paper" class="cardview">
			<div class="page-header">
			  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> 最新上傳</h4>
			</div>
			<div class="list-group">
			  <?php 
						foreach ($papers as $paper) {
							echo "<a data-target='{$paper->id}' href='view?id={$paper->id}' class='list-group-item'>
								    <h4 class='list-group-item-heading'>{$paper->title}</h4>
								    <p class='list-group-item-text'>{$paper->authors}</p>
								  </a>";
						}
						
					?>
			</div>
		</div>
		
		
	</div>

	<div id="results-area" class="container cardview">
		<div class="page-header">
		  <h4 id="show_serach_keywords" class="section-title"><i class="fa fa-search" aria-hidden="true"></i> 搜尋結果: </h4>
		</div>
			
		<div id="serach_results" class="list-group"></div>

	</div>

</div>

@stop