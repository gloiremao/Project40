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
	<link rel="stylesheet" href="css/master.blade.css">

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
		  	<li><a href="">回首頁</a></li>
		  </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
		  	
		  	<li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> English</a></li>
		  	<li><a id="trend-toggle" class="link_btn">導覽知識庫</a></li>
		  	<li><a class="link_btn" >上傳文件</a></li>
		  	<li><a class="link_btn" >管理面板</a></li>
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

	<div class="page-container">
	    
	    <div class="container">
	      <div class="row row-offcanvas row-offcanvas-left">
	        
	        <!-- sidebar -->
	        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
	            <ul class="nav">
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#">Link 1</a></li>
	              <li><a href="#">Link 2</a></li>
	              <li><a href="#">Link 3</a></li>              
	            </ul>
	        </div>
	  	
	        <!-- main area -->
	        <div class="col-xs-12 col-sm-9">
	          <h4>Shrink Width to Collapse Sidebar</h4>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in nisi eu arcu tempus vehicula. 
	            Nulla faucibus cursus metus in sagittis. Nunc elit leo, imperdiet in ligula in, euismod varius est. 
	            Aenean pellentesque lorem a porttitor placerat. Vestibulum placerat nunc ac rutrum fringilla. Donec 
	            arcu leo, tempus adipiscing volutpat id, congue in purus. Pellentesque scelerisque mattis nibh vel 
	            semper. Sed a risus purus. Fusce pulvinar, velit eget rhoncus facilisis, enim elit vulputate nisl, a 
	            euismod diam metus eu enim. Nullam congue justo vitae justo accumsan, sit amet malesuada nulla sagittis. 
	            Nam neque tellus, tristique in est vel, sagittis congue turpis. Aliquam nulla lacus, laoreet dapibus 
	            odio vitae, posuere volutpat magna. Nam pulvinar lacus in sapien feugiat, sit amet vestibulum enim 
	            eleifend. Integer sit amet ante auctor, lacinia sem quis, consectetur nulla.</p>
	    
	          <p>Vestibulum porttitor massa eget pellentesque eleifend. Suspendisse tempor, nisi eu placerat auctor, 
	            est erat tempus neque, pellentesque venenatis eros lorem vel quam. Nulla luctus malesuada porttitor. 
	            Fusce risus mi, luctus scelerisque hendrerit feugiat, volutpat gravida nisi. Quisque facilisis risus 
	            in lacus sagittis malesuada. Suspendisse non purus diam. Nunc commodo felis sit amet tortor 
	            adipiscing varius. Fusce commodo nulla quis fermentum hendrerit. Donec vulputate, tellus sed 
	            venenatis sodales, purus nibh ullamcorper quam, sit amet tristique justo velit molestie lorem.</p>
	    
	          <p>Fusce sollicitudin lacus lacinia mi tincidunt ullamcorper. Aenean velit ipsum, vestibulum nec 
	            tincidunt eu, lobortis vitae erat. Nullam ultricies fringilla ultricies. Sed euismod nibh quis 
	            tincidunt dapibus. Nulla quam velit, porta sit amet felis eu, auctor fringilla elit. Donec 
	            convallis tincidunt nibh, quis pellentesque sapien condimentum a. Phasellus purus dui, rhoncus 
	            id suscipit id, ornare et sem. Duis aliquet posuere arcu a ornare. Pellentesque consequat libero 
	            id massa accumsan volutpat. Fusce a hendrerit lacus. Nam elementum ac eros eu porttitor. 
	            Phasellus enim mi, auctor sit amet luctus a, commodo fermentum arcu. In volutpat scelerisque 
	            quam, nec lacinia libero.</p>
	    
	          <p>Aliquam a lacinia orci, iaculis porttitor neque. Nullam cursus dolor tempus mauris posuere, eu 
	            scelerisque sem tincidunt. Praesent blandit sapien at sem pulvinar, vel egestas orci varius. 
	            Praesent vitae purus at ante aliquet luctus vel quis nibh. Mauris id nulla vitae est lacinia 
	            rhoncus a vel justo. Donec iaculis quis sapien vel molestie. Aliquam sed elementum orci. 
	            Vestibulum tristique tempor risus et malesuada. Sed eget ligula sed quam placerat dapibus. 
	            Integer accumsan ac massa at tempus.</p>
	          
	        </div><!-- /.col-xs-12 main -->
	    </div><!--/.row-->
	  </div><!--/.container-->
	</div><!--/.page-container-->
	

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

	<script type="text/javascript" src="js/view.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	

</body>
