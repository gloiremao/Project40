<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{{ trans('string.register_title')}}</title>
	
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<!-- Material Design -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	

	
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="css/master.blade.css">

	
	
	
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
	      <a class="navbar-brand" href="#">{{ trans('string.title')}}</a>
	    </div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  
		  <ul class="nav navbar-nav">
		  </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ trans('string.lang-href') }}"><i class="fa fa-globe" aria-hidden="true"></i>{{ trans('string.lang') }}</a></li>
		  		<li><a href="login">{{ trans('string.login_help')}}</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->

	  </div>
	</nav>

	<header>
		<div id="header-blur">
			<div class="container">
				<div class="row">
					
					
			  		
				</div>
			</div>
		</div>	
	</header>
	

	<div id="content-area">
		
		<div id="reg-area" class="container">

			<div id="add-new" class="side-body-tab cardview">
        		<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">
                            {{ trans('string.register_title')}}
                        </h4>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                	<div class="col-lg-8">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">{{ trans('string.email')}}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="{{ trans('string.email_holder')}}" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <p class="help-block">{{ trans('string.email_help')}}</p>
                                </div>
                               
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">{{ trans('string.password')}}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="{{ trans('string.password_holder')}}" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">{{ trans('string.confirmed_password')}}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm"  placeholder="{{ trans('string.confirmed_password')}}" type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" > {{ trans('string.identity')}}</label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="student" checked>{{ trans('string.student')}}
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="teacher">{{ trans('string.teacher')}}
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="engineer">{{ trans('string.engineer')}}
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="others">{{ trans('string.others')}}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">{{ trans('string.myname')}}</label>

                                <div class="col-md-6">
                                    <input id="name" placeholder="{{ trans('string.name_holder')}}" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    <p class="help-block">{{ trans('string.name_help')}}</p>
                                </div>
                                
                            </div>

                            

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('string.company')}}</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="{{ trans('string.company_holder')}}">
                                </div>
                                <label class="col-md-4 control-label">{{ trans('string.department')}}</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="{{ trans('string.department-holder')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('string.id')}}</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="{{ trans('string.id_holder')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('string.cellphone')}}</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="{{ trans('string.cellphone_holder')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('string.privacy')}}</label>
                                <div class="col-md-6">
                                <p id="privacy-rule" class="form-control" rows="3" >{{ trans('string.privacy_content')}}
								</p>

								<div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="yes" >{{ trans('string.confirm')}}
                                    </label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('string.register_help')}}</label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">{{ trans('string.submit-btn')}}</button>
                                </div>
                            </div>
                            

                        </form>


                    </div>
                </div>
        	</div>
			

			

		</div>

	</div>

	<!-- The content of your page would go here. -->
	<div class="org-line"></div>
	<footer class="footer-distributed">

		<div class="container">
			<div class="footer-left">

				<p>{{ trans('string.sponsor')}} </p>
				<img id="moe" src="img/moe_logo.png">

				
			</div>

			<div class="footer-center"></div>

			<div class="footer-right">
				<div>
					<p><i class="fa fa-map-marker"></i> {{ trans('string.address')}}</p>
				</div>
				<div>
					<p><i class="fa fa-phone"></i> {{ trans('string.footer-phone')}}</p>
				</div>
				<div>
					<p><i class="fa fa-envelope"></i> <a href="mailto:support@company.com">support@company.com</a></p>
				</div>
			</div>

			<p class="footer-company-name">{{ trans('string.address')}}</p>
		</div>


	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

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
