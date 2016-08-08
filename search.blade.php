@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/search.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/search.js"></script>
@stop


@section('content')
	@parent

	<div id="search-bar" >
		<div id="search" class="row">

			<div id="search-area" class="col-md-8 col-md-offset-1">
	    		<div class="input-group input-group-lg">
	      			<input id="input-search" type="text" class="form-control" placeholder="全站搜尋..." onkeypress="return onEnterPress(event)">
	      			<span class="input-group-btn">
	        			<button id="search_btn" class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
	      			</span>
	    		</div><!-- /input-group -->
	    	</div>
	    </div>
	    
	    <div id="advance-search" class="row">
	    	
	    	<div id="smart-search" class="col-md-8 col-md-offset-1"> 
    			
    			<div class="btn-group">
					<button id="type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						資料類型 <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">論文</a></li>
						<li><a href="#">簡報</a></li>
						<li><a href="#">影片</a></li>
						<li><a href="#">公告</a></li>
						<li><a href="#">專利</a></li>
						<li><a href="#">標準</a></li>
						<li><a href="#">型錄</a></li>
						<li><a href="#">書籍</a></li>
						<li><a href="#">其它</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">不指定</a></li>
					</ul>
				</div>
				<div class="btn-group">
					<button id="type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						國家 <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">台灣</a></li>
						<li><a href="#">德國</a></li>
						<li><a href="#">美國</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">不指定</a></li>
					</ul>
				</div>
				<div class="btn-group">
					<button id="type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						技術領域 <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">IoT</a></li>
						<li><a href="#">Big Data</a></li>
						<li><a href="#">數位製造</a></li>
						<li><a href="#">Sensor Network</a></li>
						<li><a href="#">CPS</a></li>
						<li><a href="#">工業網路</a></li>
						<li><a href="#">I4</a></li>
						<li><a href="#">其它</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">不指定</a></li>
					</ul>
				</div>
				<div class="btn-group">
					<button id="type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						年分 <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">2016年</a></li>
						<li><a href="#">2015年以後</a></li>
						<li><a href="#">2014年以後</a></li>
						<li><a href="#">2013年以後</a></li>
						<li><a href="#">2012年以後</a></li>
						<li><a href="#">2010年以後</a></li>
						<li><a href="#">2005年以後</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">不指定</a></li>
					</ul>
				</div>
			  		
	    			    		
	  		</div>
	  		
		</div>
	</div>	


	
	<div class="row">
		<div id="results-area" class="col-md-10 col-md-offset-1 cardview">
			<div class="page-header">
			  <h4 id="show_serach_keywords" class="section-title"><i class="fa fa-search" aria-hidden="true"></i> 搜尋結果: </h4>
			</div>
			<div id="loading" class="bubblingG">
				<span id="bubblingG_1">
				</span>
				<span id="bubblingG_2">
				</span>
				<span id="bubblingG_3">
				</span>
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
	

	

@stop