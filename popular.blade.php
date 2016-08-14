@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/menu.css">
@stop

@section('include-js')
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
				    	</form>
			    		
			  		</div><!-- /.col-lg-6 -->
			  		
				</div>
			</div>
		</div>	
	</div>

	<div id="content-area">
		
		<div id="info-area" class="container">
			
			<div id="trend-tab" class="info-tab">

				<div id="hot-paper" class="cardview">
					<div class="page-header">
					  	<h4 class="section-title"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i> 熱門文章</h4>
					</div>
					<div class="list-group">
					  <?php 
								foreach ($papers as $paper) {
									echo "<a data-target='{$paper->id}' target='_blank' href='view?id={$paper->id}' class='list-group-item'>
										    <h4 class='list-group-item-heading'>{$paper->title}</h4>
										    <p class='list-group-item-text'>{$paper->authors}</p>
										  </a>";
								}
								
							?>
					</div>
				</div>

				<div id="hot-author" class="cardview info-tab">
					<div class="page-header">
					  	<h4 class="section-title"><i class="fa fa-user" aria-hidden="true"></i> 熱門作者</h4>
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
	


		</div>

	</div>

@stop