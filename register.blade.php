<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>註冊會員</title>
	
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
	      <a class="navbar-brand" href="#">生產力4.0 知識庫</a>
	    </div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  
		  <ul class="nav navbar-nav">
		  </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
		  		<li><a href="login">已經有帳號? 立即登入</a></li>
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
                            註冊
                        </h4>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                	<div class="col-lg-8">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">電子郵件</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="你的通訊用電子郵件" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <p class="help-block">此郵件將會是您登入網頁的帳號</p>
                                </div>
                               
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">密碼</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="請填入6位數以上之密碼" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">確認密碼</label>

                                <div class="col-md-6">
                                    <input id="password-confirm"  placeholder="請確認您輸入的密碼" type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" >身分別</label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>學生
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">教師
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">工程師
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">其他
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">姓名</label>

                                <div class="col-md-6">
                                    <input id="name" placeholder="請填您的真實姓名" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    <p class="help-block">請填您的真實姓名，以利審核員查證</p>
                                </div>
                                
                            </div>

                            

                            <div class="form-group">
                                <label class="col-md-4 control-label">學校(單位)</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="請填入您的單位">
                                </div>
                                <label class="col-md-4 control-label">科系(部門)</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="請填入此資料發佈出處">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">學號(員工編號)</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="請填入學號或員工編號">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">電話</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="請填入您工作單位電話">
                                </div>
                                <label class="col-md-4 control-label">行動電話</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="請填入您聯繫之行動電話">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">隱私條款</label>
                                <div class="col-md-6">
                                <p id="privacy-rule" class="form-control" rows="3" >隱私條款
								</p>

								<div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="yes" >同意
                                    </label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">請確認以上資訊是否正確</label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">送出</button>
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

</body>
