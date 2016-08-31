@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/search.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/search.js"></script>
	<script type="text/javascript">
		var string_search_result = "{{ trans('string.search_results')}}";
		var string_search_count = "{{ trans('string.search_count')}}";
	</script>
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
	    	
	    	<div id="smart-search" class="col-md-8 col-md-offset-1 area-hide"> 
			    			
    			<div id="select-type" class="btn-group">
					<select class="selectpicker" multiple data-actions-box="true" title="指定類型"> 
					    <option >論文</option>
					    <option >簡報</option>
					    <option >影片</option>
					    <option >公告</option>
					    <option >專利</option>
					    <option >標準</option>
					    <option >型錄</option>
					    <option >書籍</option>
					    <option >其它</option>
					</select>
				</div>

				<div id="select-country" class="btn-group">
					<select  class="selectpicker" multiple data-actions-box="true" title="指定國家" data-live-search="true">
					    <option >台灣</option>
					    <option >德國</option>
					    <option >英國</option>
					    <option >法國</option>
					    <option >美國</option>
					    <option >日本</option>
					    <option >義大利</option>
					    <option >加拿大</option>
					    <option >中國</option>
					</select>
				</div>
				<div id="select-field" class="btn-group">
					<select  class="selectpicker" multiple data-actions-box="true" title="指定領域">
					    <option >IoT</option>
					    <option >Big Date</option>
					    <option >數位製造</option>
					    <option >資訊安全</option>
					    <option >Sensor Network</option>
					    <option >CPS</option>
					    <option >工業網路</option>
					    <option >I4</option>
					    <option >其它</option>
					</select>
				</div>
				<div id="select-year" class="btn-group">
					<select  class="selectpicker" multiple data-actions-box="true" title="指定年份">
					    <option >2016年</option>
					    <option >2015年以後</option>
					    <option >2014年以後</option>
					    <option >2013年以後</option>
					    <option >2012年以後</option>
					    <option >2010年以後</option>
					    <option >2005年以後</option>
					    <option >2000年以後</option>
					</select>
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