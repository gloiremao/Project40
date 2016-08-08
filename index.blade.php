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
		<div id="header-blur">
			<div class="container">
				<div class="row">
					<div id="top-intro" class="col-md-8 col-md-offset-2">
						<img id="top-logo" src="img/logo.png">
			            <h1 class="brand-heading">生產力 4.0 知識庫</h1>
			        </div>
					<div id="search-area" class="col-md-8 col-md-offset-2">
						<form action="search">
							<div class="input-group input-group-lg">
				    			<span class="input-group-btn">
							        <button id="smart-btn" class="btn btn-primary" type="button">進階搜尋</button>
							    </span>
				      			<input id="input-search" type="text" name="query" class="form-control" placeholder="全站搜尋..." onkeypress="return onEnterPress(event)">
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
	</header>

	<div id="banner" class="container">
		<div id="statistic" class="cardview">
			<h4 ><i class="fa fa-bullhorn" aria-hidden="true"></i> 歡迎使用生產力4.0資料庫，目前資料: <?php echo $paperCount?> 筆資料</h4>
		</div>
	</div>

	<div id="content-area">
		
		<div id="info-area" class="container">
			
			<div id="new-tab" class="cardview info-tab">
				<div class="page-header">
				  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> 最新上傳</h4>
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

			
		</div>

	</div>

@stop