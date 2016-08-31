<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{{ trans('string.title') }}</title>
	<link rel="icon" href="img/icon.ico">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<!-- Material Design -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	

	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/footer.css">
	@yield('include-css')
	<link rel="stylesheet" href="css/master.blade.css">
	
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
	      <a class="navbar-brand" href="/itri">
	        <img id="icon" alt="Brand" src="img/icon.png">
	      </a>
	      <a class="navbar-brand" href="/itri">{{ trans('string.title') }}</a>
	    </div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  
		  <ul class="nav navbar-nav">
		  </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
		  	
		  	
		  	<li><a id="new-btn" href="new" >{{ trans('string.new') }}</a></li>
		  	<li><a id="hot-btn" href="popular" >{{ trans('string.popular') }}</a></li>
		  	<li><a id="data-type-btn" href="datatype" class="link_btn" >{{ trans('string.datatype') }}</a></li>
		  	<li><a id="data-field-btn" href="technology" class="link_btn" >{{ trans('string.techtype') }}</a></li>
		  	<li><a id="discussion-btn" href="forum" class="link_btn" >{{ trans('string.forum') }}</a></li>
		  	<li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('string.download') }}<span class="caret"></span></a>
		      <ul class="dropdown-menu">	
		        <li><a href="resources#tab1">{{ trans('string.download-alliance') }}</a></li>
		        <li><a href="resources#tab2">{{ trans('string.download-industry') }}</a></li>
		        <li><a href="resources#tab3">{{ trans('string.download-app') }}</a></li>		    
		      </ul>
		    </li>

		    <li><a href="{{ trans('string.lang-href') }}"><i class="fa fa-globe" aria-hidden="true"></i>{{ trans('string.lang') }}</a></li>
		    <li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('string.greeting', ['name' => '使用者']) }}<span class="caret"></span></a>
		      <ul class="dropdown-menu">
		      	<li><a href="admin" class="link_btn" >{{ trans('string.admin') }}</a></li>
		      	<li><a href="account#upload" class="link_btn" >{{ trans('string.upload') }}</a></li>
		        <li><a id="favorite-btn" href="account#favorite">{{ trans('string.myfavorite') }}</a></li>
		        <li><a id="myupload-btn" href="account#mypaper">{{ trans('string.myuploaded') }}</a></li>
		        <li role="separator" class="divider"></li>
		        <!--<li><a href="#">{{ trans('string.help') }}</a></li>
		        <li><a href="#">{{ trans('string.contactus') }}</a></li>-->
		        <li><a href="account">{{ trans('string.account') }}</a></li>
		        <li><a href="logout">{{ trans('string.logout') }}</a></li>
		      </ul>
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

				<p>{{ trans('string.sponsor') }}</p>
				<img id="moe" src="img/moe_logo.png">

				
			</div>

			<div class="footer-center"></div>

			<div class="footer-right">
				<div>
					<p><i class="fa fa-map-marker"></i> {{ trans('string.address') }}</p>
				</div>
				<div>
					<p><i class="fa fa-phone"></i> {{ trans('string.footer-phone')}}</p>
				</div>
				<div>
					<p><i class="fa fa-envelope"></i> <a href="mailto:support@company.com">support@company.com</a></p>
				</div>
			</div>
			<p class="footer-company-name">{{ trans('string.footer-title') }}</p>

		</div>


	</footer>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
	
	@yield('include-js')

	<!-- google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-82854773-1', 'auto');
	  ga('send', 'pageview');

	</script>

</body>
