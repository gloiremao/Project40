<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>生產力4.0知識庫</title>
	
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<!-- Material Design -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	

	
	<link rel="stylesheet" href="css/footer.css">
	@yield('include-css')

	
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
	      <a class="navbar-brand" href="/itri">生產力4.0 知識庫</a>
	    </div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  
		  <ul class="nav navbar-nav">
		  </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
		  	
		  	
		  	<li><a id="new-btn" class="link_btn" >最新文章</a></li>
		  	<li><a id="hot-btn" class="link_btn" >熱門文章</a></li>
		  	<li><a id="data-type-btn" class="link_btn" >資料類型</a></li>
		  	<li><a id="data-field-btn" class="link_btn" >技術領域</a></li>
		  	<li><a id="discussion-btn" class="link_btn" >討論區</a></li>
		  	<li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">下載區<span class="caret"></span></a>
		      <ul class="dropdown-menu">	
		        <li><a href="#">聯盟中心教材</a></li>
		        <li><a href="#">國內廠商資料</a></li>
		        <li><a href="#">APP下載</a></li>		    
		      </ul>
		    </li>
		  	
		  	
		    <li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">選單<span class="caret"></span></a>
		      <ul class="dropdown-menu">
		      	<li><a class="link_btn" >上傳文件</a></li>
		      	<li><a class="link_btn" >管理面板</a></li>
		        <li><a href="#">帳戶</a></li>
		        <li><a href="#">我的文章</a></li>
		        <li role="separator" class="divider"></li>
		        <li><a href="#">聯絡我們</a></li>
		      </ul>
		    </li>
		    <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> English</a></li>
		    <li>
		  		<button type="button" class="btn btn-default navbar-btn">登入</button>
		  	</li>
		  	<li>
		  		<button type="button" class="btn btn-success navbar-btn">註冊</button>
		  	</li>
		  </ul>
		</div><!-- /.navbar-collapse -->

	  </div>
	</nav>
	

	 @section('content')

	 @show

	<!-- The content of your page would go here. -->
	<div class="org-line"></div>
	<footer class="footer-distributed">

		<div class="container">
			<div class="footer-left">

				<p>指導單位: </p>
				<img id="moe" src="img/moe_logo.png">

				
			</div>

			<div class="footer-center"></div>

			<div class="footer-right">
				<div>
					<p><i class="fa fa-map-marker"></i> <span>地址</span> 地址資訊</p>
				</div>
				<div>
					<p><i class="fa fa-phone"></i> 連絡電話資訊</p>
				</div>
				<div>
					<p><i class="fa fa-envelope"></i> <a href="mailto:support@company.com">support@company.com</a></p>
				</div>
			</div>
			<p class="footer-company-name">生產力4.0知識庫平台&copy; 2016</p>
		</div>


	</footer>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>

	@yield('include-js')

</body>
