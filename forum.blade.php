@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/forum.css">
@stop

@section('include-js')
@stop


@section('content')
	@parent

	<div id="content-area">
		
		<div id="forum-area" class="container">

			<div id="asking-area" class="row cardview">
				<div class=" col-md-12 form-group">
					<h4><i class="fa fa-commenting-o" aria-hidden="true"></i> 發表問題</h4>
	                <p class="help-block">您的問題將會交由客服人員回覆，並且顯示在此。</p>
	                <label class="control-label">主旨</label>
	                <input class="form-control" placeholder="請填入您的問題主旨">
	                <label class="control-label">內文</label>
	               	<textarea id="input-comment"class="form-control" rows="3" placeholder="內文"></textarea>
					<button id="btn-submit" class="btn btn-success" type="submit">發表</button>
	            </div>
	        </div>

	        <div id="asking-area" class="row cardview">
	        	<div class="page-header">
				  	<h4 class="section-title"><i class="fa fa-question" aria-hidden="true"></i> 問題集錦</h4>
				</div>
				<div class="col-md-12 list-group">
					<div class="col-md-12 qa-title">
						<h4 class="response-title">Q:問題主旨</h4>
	                	<p class="response-content">由XXX發表於yyyy-mm-dd-hh-mm-ss</p>
					</div>
					<div class="col-md-12 qa-answer">
						<h4>A:這是回復答案</h4>
					</div>
      
	            </div>
	            <div class="col-md-12 list-group">
					<div class="col-md-12 qa-title">
						<h4 class="response-title">Q:問題主旨</h4>
	                	<p class="response-content">由XXX發表於yyyy-mm-dd-hh-mm-ss</p>
					</div>
					<div class="col-md-12 qa-answer">
						<h4>A:這是回復答案</h4>
					</div>
      
	            </div>
	            <div class="col-md-12 list-group">
					<div class="col-md-12 qa-title">
						<h4 class="response-title">Q:問題主旨</h4>
	                	<p class="response-content">由XXX發表於yyyy-mm-dd-hh-mm-ss</p>
					</div>
					<div class="col-md-12 qa-answer">
						<h4>A:這是回復答案</h4>
					</div>
      
	            </div>
	        </div>
			
			
		</div>

		

	</div>

@stop