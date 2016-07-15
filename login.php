<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Industry 4.0</title>
	
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<!-- Material Design -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	

	
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/master.blade.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">


	
	
	
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
		  </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
		  	
		  	<li><a href="#content-area"> 導覽資料庫</a></li>
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

	<header>
		<div id="header-blur" >
			<div id="login-wrapper" class="col-md-4 col-md-offset-4">
				<div class="org-line"></div>
				<div id="login-area" class="cardview">
					<div class="page-header">
						<h4>生產力4.0知識庫</h4>
					</div>
					<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">帳號</label>
					    <input type="account" class="form-control" id="exampleInputEmail1" placeholder="聯盟會員帳號">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">密碼</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="使用者密碼">
					  </div>
					  <button type="submit" class="btn btn-success btn-lg btn-block">登入</button>
					  <p>
					  	<a href="forget">忘記密碼</a>? 或是點此<a href="register">註冊</a> 
					  </p>
					</form>
				</div>
			</div>
			
		</div>	
	</header>

	<div id="banner" class="container">
		<div id="statistic" class="cardview">
			<h4 ><i class="fa fa-bullhorn" aria-hidden="true"></i> 歡迎使用生產力4.0資料庫，目前資料: 15,125,124 筆資料</h4>
		</div>
	</div>
	

	<div id="content-area">
		
		<div id="info-area" class="container">

			

			<div id="new-paper" class="cardview">
				<div class="page-header">
				  	<h4 class="section-title"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 最新上傳</h4>
				</div>
				<div class="list-group">
				  <a href="#" class="list-group-item">
				    <h4 class="list-group-item-heading">New</h4>
				    <p class="list-group-item-text">Proceedings of the ACM/IEEE SC 2005 Conference.</p>
				    <p class="list-group-item-text">Yoo, Andy and Chow, Edmond and Henderson, Keith and McLendon, William and Hendrickson, Bruce and Catalyurek, Umit</p>
				  </a>
				</div>
			</div>

			
			
			
			
		</div>

		

	</div>

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

			<p class="footer-company-name">生產力4.0知識庫平台&copy; 2016 | Web Designed by NMSL, NTHU</p>
		</div>


	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	

</body>
