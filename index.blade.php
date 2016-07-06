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
			    		<div class="input-group input-group-lg">
			    			<span class="input-group-btn">
						        <button id="smart-btn" class="btn btn-primary" type="button">分類搜尋</button>
						    </span>
			      			<input id="input-search" type="text" class="form-control" placeholder="搜尋..." onkeypress="return onEnterPress(event)">
			      			<span class="input-group-btn">
			        			<button id="search_btn" class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
			      			</span>
			    		</div><!-- /input-group -->
			    		<div id="smart-search" class="cardview area-hide"> 
			    			<div class="btn-group">
								<button id="type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									資料類型 <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">不指定</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button id="type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									國家 <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">不指定</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button id="type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									技術領域 <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">不指定</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button id="type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									年分 <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">不指定</a></li>
								</ul>
							</div>
					  		
			    		</div>
			    		
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
		
		<div id="new-paper" class="cardview">
			<div class="page-header">
			  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> 最新上傳</h4>
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

		<div id="hot-paper" class="cardview area-hide">
			<div class="page-header">
			  	<h4 class="section-title"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i> 熱門文章</h4>
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

		
		

		<div id="hot-author" class="cardview area-hide">
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

	<div id="results-area" class="container cardview">
		<div class="page-header">
		  <h4 id="show_serach_keywords" class="section-title"><i class="fa fa-search" aria-hidden="true"></i> 搜尋結果: </h4>
		</div>
			
		<div id="serach_results" class="list-group"></div>

		<div class="col-md-6 col-md-offset-4">
			<nav >
			  <ul id="serach-nav" class="pagination">
			    
			  </ul>
			</nav>
		</div>

	</div>

</div>

@stop