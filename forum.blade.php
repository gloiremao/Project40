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
					<h4><i class="fa fa-commenting-o" aria-hidden="true"></i> {{ trans('string.post_question')}}</h4>
	                <p class="help-block">{{ trans('string.post_help')}}</p>
	                <label class="control-label">{{ trans('string.post_title')}}</label>
	                <input class="form-control" placeholder="{{ trans('string.post_title_help')}}">
	                <label class="control-label">{{ trans('string.post_content')}}</label>
	               	<textarea id="input-comment"class="form-control" rows="3" placeholder="{{ trans('string.post_content')}}"></textarea>
					<button id="btn-submit" class="btn btn-success" type="submit">{{ trans('string.post_btn')}}</button>
	            </div>
	        </div>

	        <div id="asking-area" class="row cardview">
	        	<div class="page-header">
				  	<h4 class="section-title"><i class="fa fa-question" aria-hidden="true"></i> {{ trans('string.question_title')}}</h4>
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