@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/resources.css">
@stop

@section('include-js')
@stop


@section('content')
	@parent

	<div id="top-bannar">
		
	</div>

	<div id="content-area">
		
		<div id="info-area" class="container cardview">
			
			<div class="row">
				<div id="sidemenu" class="col-md-2">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">聯盟中心教材</a></li>
						<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">國內廠商資料</a></li>
						<li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">APP下載</a></li>
					</ul>
				</div>
				<!-- Tab panes -->
				<div class="col-md-10">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tab1">
							<div ="new-tab" class="info-tab">
								<div class="page-header">
								  	<h4 class="section-title"><i class="fa fa-download" aria-hidden="true"></i> 聯盟中心教材</h4>
								</div>
								<div class="col-md-12">
									<div class="cardview">
										<div  class="row">
										  	<div class="col-md-12 qa-title">
												<h4 class="response-title">資源主旨</h4>
							                	<p class="response-content">新增於 yyyy-mm-dd-hh-mm-ss</p>
											</div>
											<div class="col-md-12 qa-answer">
												<a href="#">link</a>
											</div>
										</div>
									</div>
									<div class="cardview">
										<div  class="row">
										  	<div class="col-md-12 qa-title">
												<h4 class="response-title">資源主旨</h4>
							                	<p class="response-content">新增於 yyyy-mm-dd-hh-mm-ss</p>
											</div>
											<div class="col-md-12 qa-answer">
												<a href="#">link</a>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab2">
							<div id="new-tab" class="info-tab">
								<div class="page-header">
								  	<h4 class="section-title"><i class="fa fa-download" aria-hidden="true"></i> 國內廠商資料</h4>
								</div>
								
								<div class="col-md-12">
									<div class="cardview">
										<div  class="row">
										  	<div class="col-md-12 qa-title">
												<h4 class="response-title">資源主旨</h4>
							                	<p class="response-content">新增於 yyyy-mm-dd-hh-mm-ss</p>
											</div>
											<div class="col-md-12 qa-answer">
												<a href="#">link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab3">
							<div id="new-tab" class="info-tab">
								<div class="page-header">
								  	<h4 class="section-title"><i class="fa fa-qrcode" aria-hidden="true"></i> APP下載區</h4>
								</div>
								<div class="col-md-12">
									<div class="cardview">
										<div  class="row">
										  	<div class="col-md-12 qa-title">
												<h4 class="response-title">資源主旨</h4>
							                	<p class="response-content">新增於 yyyy-mm-dd-hh-mm-ss</p>
											</div>
											<div class="col-md-12 qa-answer">
												<a href="#">link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			

		</div>

	</div>

@stop

