@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/forum.css">
@stop

@section('include-js')
<script type="text/javascript">
function validateForm() {
   	var title = $("#f-title").val();
   	var content = $("#f-content").val();
    if (title == "" || content == "") {
    	alert("標題與內文不可為空。");
        return false;
    } else {
    	return true;
    }
}
</script>
@stop


@section('content')
	@parent

	<div id="content-area">
		
		<div id="forum-area" class="container"
>
			<div id="asking-area" class="row cardview">
				<div class=" col-md-12 form-group">
					<form role="form" method="POST" onsubmit="return validateForm()" action="{{ url('/forum/post') }}">
						{{ csrf_field() }}
						<h4><i class="fa fa-commenting-o" aria-hidden="true"></i> {{ trans('string.post_question')}}</h4>
		                <p class="help-block">{{ trans('string.post_help')}}</p>
		                <label class="control-label">{{ trans('string.post_title')}}</label>
		                <input id="f-title" class="form-control" name="title" placeholder="{{ trans('string.post_title_help')}}">
		                <label class="control-label">{{ trans('string.post_content')}}</label>
		               	<textarea id="f-content" id="input-comment"class="form-control" rows="3" name="content" placeholder="{{ trans('string.post_content')}}"></textarea>
						<button id="btn-submit" class="btn btn-success" type="submit" title="尚未完成" data-content="標題與內容皆不可為空">{{ trans('string.post_btn')}}</button>
					</form>
	            </div>
	        </div>

	        <div id="asking-area" class="row cardview">
	        	<div class="page-header">
				  	<h4 class="section-title"><i class="fa fa-question" aria-hidden="true"></i> {{ trans('string.question_title')}}</h4>
				</div>
				<?php 
							foreach ($questions as $q) {
								echo "<div class='col-md-12 list-group'>
										<div class='col-md-12 qa-title'>
											<h4 class='response-title'>Q:{$q->title}</h4>
											<h4 class='response-content'>{$q->content}</h4>
											<p class='response-content'>from {$q->userName}, {$q->created_at} </p>
										</div>
										<div class='col-md-12 qa-answer'>
											<h4>A:{$q->reply}</h4>
										</div>
									</div>";
							}
							
						?>

				<div class="col-md-12 list-group">
					<div class="col-md-12 qa-title">
						<h4 class="response-title">Q:功能測試中</h4>
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