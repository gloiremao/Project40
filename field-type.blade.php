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
					<div id="search-area" class="col-md-8 col-md-offset-2">
			    		<form action="search">
				    		<div class="input-group input-group-lg">
				    			<span class="input-group-btn">
							        <button id="smart-btn" class="btn btn-primary" type="button">進階搜尋</button>
							    </span>
				      			<input id="input-search" type="text" class="form-control" name="query" placeholder="全站搜尋..." onkeypress="return onEnterPress(event)">
				      			<span class="input-group-btn">
				        			<button id="search_btn" class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				      			</span>
				    		</div><!-- /input-group -->
				    		<div id="smart-search" class="cardview area-hide"> 
				    			<div id="select-type" class="btn-group">
									
									<select  class="selectpicker" multiple data-done-button="true">
									    <option selected>不指定類型</option>
									    <option>論文</option>
									    <option>簡報</option>
									    <option>影片</option>
									    <option>公告</option>
									    <option>專利</option>
									    <option>標準</option>
									    <option>型錄</option>
									    <option>書籍</option>
									    <option>其它</option>
									</select>
								</div>
								<div class="btn-group">
									<select  class="selectpicker" multiple data-done-button="true">
									    <option selected>不指定國家</option>
									    <option>台灣</option>
									    <option>德國</option>
									    <option>英國</option>
									    <option>法國</option>
									    <option>美國</option>
									    <option>日本</option>
									    <option>義大利</option>
									    <option>加拿大</option>
									    <option>中國</option>
									</select>
								</div>
								<div class="btn-group">
									<select  class="selectpicker" multiple data-done-button="true">
									    <option selected>不指定領域</option>
									    <option>IoT</option>
									    <option>Big Date</option>
									    <option>數位製造</option>
									    <option>Sensor Network</option>
									    <option>CPS</option>
									    <option>工業網路</option>
									    <option>I4</option>
									    <option>其它</option>
									</select>
								</div>
								<div class="btn-group">
									<select  class="selectpicker" multiple data-done-button="true">
									    <option selected>不指定年分</option>
									    <option>2016年</option>
									    <option>2015年以後</option>
									    <option>2014年以後</option>
									    <option>2013年以後</option>
									    <option>2012年以後</option>
									    <option>2010年以後</option>
									    <option>2005年以後</option>
									    <option>2000年以後</option>
									</select>
								</div>
						  		
				    		</div>
				    	</form>
			    		
			  		</div><!-- /.col-lg-6 -->
			  		
				</div>
			</div>
		</div>	
	</div>

	<div class="page-container">
	    
	    <div class="container">
	    	<div class="page-header">
			  	<h4 class="section-title"><i class="fa fa-file" aria-hidden="true"></i> 技術領域</h4>
			</div>

	    	<ul id="data-nav" class="nav nav-tabs">
			  	<li role="presentation" class="active"><a data-target="IoT" class="link_btn"><i class='fa fa-file-powerpoint-o' aria-hidden='true'></i> 物聯網</a></li>
			  	<li role="presentation"><a data-target="Big Data" class="link_btn"><i class="fa fa-file-video-o" aria-hidden="true"></i> 大數據</a></li>
			  	<li role="presentation"><a data-target="數位製造" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> 數位製造</a></li>
			  	<li role="presentation"><a data-target="資訊安全" class="link_btn"><i class='fa fa-file-powerpoint-o' aria-hidden='true'></i> 資訊安全</a></li>
			  	<li role="presentation"><a data-target="Sensor Network" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> 感測網路</a></li>
			  	<li role="presentation"><a data-target="CPS" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> CPS</a></li>
			  	<li role="presentation"><a data-target="工業網路" class="link_btn"><i class="fa fa-files-o" aria-hidden="true"></i> 工業網路</a></li>
			  	<li role="presentation"><a data-target="I4" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> I4</a></li>
			  	<li role="presentation"><a data-target="其它" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> 其它</a></li>
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
