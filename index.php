<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Industry 4.0</title>
	
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<!-- Material Design 
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	-->

	<link rel="stylesheet" type="text/css" href="css/default.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	
	
</head>

<body>
	
	<nav class="navbar navbar-default">
	  <div class="container-fluid">

	    <div class="navbar-header">
	    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
	      <a class="navbar-brand" href="#">
	        <img id="icon" alt="Brand" src="img/icon.png">
	      </a>
	      <a class="navbar-brand" href="#">生產力4.0 知識庫</a>
	    </div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  
		  <ul class="nav navbar-nav">
		    <li><a id="slidenav_btn" onclick="openNav()">個人中心</a></li>
		  </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
		  	<li>
		  		<button type="button" class="btn btn-default navbar-btn">登入</button>
		  	</li>
		  	<li>
		  		<button type="button" class="btn btn-success navbar-btn">註冊</button>
		  	</li>
		    <li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">選單<span class="caret"></span></a>
		      <ul class="dropdown-menu">
		        <li><a href="#">帳戶</a></li>
		        <li><a href="#">我的文章</a></li>
		        <li role="separator" class="divider"></li>
		        <li><a href="#">聯絡我們</a></li>
		      </ul>
		    </li>
		  </ul>
		</div><!-- /.navbar-collapse -->

	  </div>
	</nav>

	<header>
		
	</header>

	<!-- slide menu-->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<a href="">上傳文件</a>
		<a href="">帳戶管理</a>
		<a href="">我的文章</a>
	</div>
	
	<div id="search-area" class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
	    		<div class="input-group input-group-lg">
	      			<input id="input-search" type="text" class="form-control" placeholder="搜尋...">
	      			<span class="input-group-btn">
	        			<button id="search_btn" class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
	      			</span>
	    		</div><!-- /input-group -->
	  		</div><!-- /.col-lg-6 -->
		</div>
	</div>

	<div id="trend-area">
		<div class="container">
			<ul id="tab-nav" class="nav nav-tabs nav-justified">
			  <li role="presentation" class="active"><a data-toggle="tab" href="#hot-paper">熱門文章</a></li>
			  <li role="presentation"><a data-toggle="tab" href="#new-paper">最新文章</a></li>
			  <li role="presentation"><a data-toggle="tab" href="#history-paper">搜尋紀錄</a></li>
			</ul>
			
			<div class="tab-content">
				<div id="hot-paper" class="tab-pane fade in active">
					<div class="list-group">
						<?php 
							foreach ($papers as $paper) {
								echo "<a data-target='{$paper->id}' href='{$paper->link}' class='list-group-item'>
									    <h4 class='list-group-item-heading'>{$paper->title}</h4>
									    <p class='list-group-item-text'>{$paper->authors}</p>
									  </a>";
							}
							
						?>

					  <!-- 
					  <a href='' class='list-group-item'>
					    <h4 class='list-group-item-heading'>A scalable distributed parallel breadth-first search algorithm on BlueGene/L.</h4>
					    <p class='list-group-item-text'>Proceedings of the ACM/IEEE SC 2005 Conference.</p>
					    <p class='list-group-item-text'>Yoo, Andy and Chow, Edmond and Henderson, Keith and McLendon, William and Hendrickson, Bruce and Catalyurek, Umit</p>
					  </a>
					  -->
					</div>
				</div>
				<div id="new-paper" class="tab-pane fade">
					<div class="list-group">
					  <a href="#" class="list-group-item">
					    <h4 class="list-group-item-heading">A scalable distributed parallel breadth-first search algorithm on BlueGene/L.</h4>
					    <p class="list-group-item-text">Proceedings of the ACM/IEEE SC 2005 Conference.</p>
					    <p class="list-group-item-text">Yoo, Andy and Chow, Edmond and Henderson, Keith and McLendon, William and Hendrickson, Bruce and Catalyurek, Umit</p>
					  </a>
					</div>
				</div>
				
				<div id="history-paper" class="tab-pane fade">
					<div class="list-group">
					  <a href="#" class="list-group-item">
					    <h4 class="list-group-item-heading">Hello Paper</h4>
					    <p class="list-group-item-text">Proceedings of the ACM/IEEE SC 2005 Conference.</p>
					    <p class="list-group-item-text">Yoo, Andy and Chow, Edmond and Henderson, Keith and McLendon, William and Hendrickson, Bruce and Catalyurek, Umit</p>
					  </a>
					  
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="results-area" class="container">
		<div class="page-header">
		  <h3 id="show_serach_keywords" >搜尋結果: </h3>
		</div>
			
		<div id="serach_results" class="list-group">
			<div data-target="1" class="papers">
				<a href="#" >
			    	<h4 data-type="title" class="list-group-item-heading"><i class="fa fa-file-text-o" aria-hidden="true"></i> A scalable distributed parallel breadth-first search algorithm on BlueGene/L.</h4>
			  	</a>
			    <p data-type="author" class="list-group-item-text author">Yoo, Andy and Chow, Edmond and Henderson, Keith and McLendon, William and Hendrickson, Bruce and Catalyurek, Umit</p>
			    <p data-type="detail-info" class="list-group-item-text">Proceedings of the ACM/IEEE SC 2005 Conference.</p>
			    <button type="button" data-target="1" class="btn btn-link btn-xs a_btn">Abstract</button>
			    <p data-target="1" class="list-group-item-text area-hide">some detail</p>
		  	</div>
		  	<div data-target="2" class="papers">
				<a href="#" >
			    	<h4 data-type="title" class="list-group-item-heading"><i class="fa fa-file-text-o" aria-hidden="true"></i> A scalable distributed parallel breadth-first search algorithm on BlueGene/L.</h4>
			  	</a>
			    <p data-type="author" class="list-group-item-text author">Yoo, Andy and Chow, Edmond and Henderson, Keith and McLendon, William and Hendrickson, Bruce and Catalyurek, Umit</p>
			    <p data-type="detail-info" class="list-group-item-text">Proceedings of the ACM/IEEE SC 2005 Conference.</p>
			    <button type="button" data-target="2" class="btn btn-link btn-xs a_btn">Abstract</button>
			    <p data-target="2" class="list-group-item-text area-hide">some detail</p>
		  	</div>
		  	
		</div>

	</div>


	<footer></footer>
	

</body>
