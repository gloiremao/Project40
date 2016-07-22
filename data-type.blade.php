@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/menu.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/menu.js"></script>
@stop


@section('content')
	@parent
	<div class="page-container">
	    
	    <div class="container">
	    	<div class="page-header">
			  	<h4 class="section-title"><i class="fa fa-file" aria-hidden="true"></i> 資料類型</h4>
			</div>

	    	<ul id="data-nav" class="nav nav-tabs">
				<li role="presentation" class="active"><a data-target="論文" class="link_btn"><i class='fa fa-file-text-o' aria-hidden='true'></i> 論文</a></li>
			  	<li role="presentation"><a data-target="簡報" class="link_btn"><i class='fa fa-file-powerpoint-o' aria-hidden='true'></i> 簡報</a></li>
			  	<li role="presentation"><a data-target="影片" class="link_btn"><i class="fa fa-file-video-o" aria-hidden="true"></i> 影片</a></li>
			  	<li role="presentation"><a data-target="公告" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> 公告</a></li>
			  	<li role="presentation"><a data-target="專利" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> 專利</a></li>
			  	<li role="presentation"><a data-target="標準" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> 標準</a></li>
			  	<li role="presentation"><a data-target="型錄" class="link_btn"><i class="fa fa-files-o" aria-hidden="true"></i> 型錄</a></li>
			  	<li role="presentation"><a data-target="其它" class="link_btn"><i class="fa fa-file-o" aria-hidden="true"></i> 其它</a></li>
			</ul>

			<div id="show-papers" class="cardview">
				<!-- paper area -->
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