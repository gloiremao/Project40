<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>生產力4.0控制面板</title>
	
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<!-- Material Design -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/admin.css">
	
</head>

<body>
	<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
	    <div class="side-menu">
	    
		    <nav class="navbar navbar-default" role="navigation">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <div class="brand-wrapper">
			            <!-- Hamburger -->
			            <button type="button" class="navbar-toggle">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>

			            <!-- Brand -->
			            <div class="brand-name-wrapper">
			                <a class="navbar-brand" href="#">
			                    控制面板
			                </a>
			            </div>

			        </div>

			    </div>

		    	<!-- Main Menu -->
			    <div class="side-menu-container">
			        <ul class="nav navbar-nav">

			            <li class="active side-btn" target="add-new"><a><i class="fa fa-upload" aria-hidden="true"></i> 新增資料</a></li>
			            <li class="side-btn" target="upload"><a ><i class="fa fa-upload" aria-hidden="true"></i> 上傳大量資料</a></li>

			            <!-- Dropdown-->
			            <li class="panel panel-default" id="dropdown">
			                <a data-toggle="collapse" href="#dropdown-lvl1">
			                    <i class="fa fa-check-square-o" aria-hidden="true"></i> 審核區<span class="caret"></span>
			                </a>

			                <!-- Dropdown level 1 -->
			                <div id="dropdown-lvl1" class="panel-collapse collapse">
			                    <div class="panel-body">
			                        <ul class="nav navbar-nav">
			                            <li class="side-btn" target="people"><a >人員審核</a></li>
			                            <li class="side-btn" target="paper"><a >文章審核</a></li>
			                            <li class="side-btn" target="comment"><a >意見審核</a></li>

			                            <!-- Dropdown level 2 
			                            <li class="panel panel-default" id="dropdown">
			                                <a data-toggle="collapse" href="#dropdown-lvl2">
			                                    <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
			                                </a>
			                                <div id="dropdown-lvl2" class="panel-collapse collapse">
			                                    <div class="panel-body">
			                                        <ul class="nav navbar-nav">
			                                            <li><a href="#">Link</a></li>
			                                            <li><a href="#">Link</a></li>
			                                            <li><a href="#">Link</a></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                            </li>-->
			                        </ul>
			                    </div>
			                </div>
			            </li>

			            <li class="side-btn" target="analytics"><a ><i class="fa fa-bar-chart" aria-hidden="true"></i> 網站報表</a></li>
			            <li ><a href="/itri"><i class="fa fa-home" aria-hidden="true"></i> 回首頁</a></li>

			        </ul>
			    </div><!-- /.navbar-collapse -->
			</nav>
	    
	    </div>

    	<!-- Main Content -->
    	<div class="container-fluid">
	        <div class="side-body">
	           	<h1> 生產力4.0 控制面板 </h1>
	           	<pre> 歡迎使用生產力4.0控制面板! </pre>
	           
	        	<div id="add-new" class="side-body-tab cardview">
	        		<!-- Page Heading -->
	                <div class="row">
	                    <div class="col-lg-12 ">
	                        <h4 class="page-header">
	                            新增資料
	                        </h4>
	                    </div>
	                </div>
	                <!-- /.row -->
	                <div class="row">
	                	<div class="col-lg-6">

	                        <form role="form" method="POST" onsubmit="return validateForm()" action="{{ url('/upload') }}">
								{{ csrf_field() }}
	                            <div class="form-group">
	                                <label>標題</label>
	                                <input id="paper-title" name="title" class="form-control" placeholder="標題">
	                            </div>

	                            <div class="form-group">
	                                <label>類型</label>
	                                <select class="form-control" name="type">
	                                	<option>論文</option>
	                                    <option>簡報</option>
	                                    <option>影片</option>
	                                    <option>公告</option>
	                                    <option>專利</option>
	                                    <option>標準</option>
	                                    <option>型錄</option>
	                                    <option>其他</option>
	                                </select>
	                            </div>

	                            <div class="form-group">
	                                <label>技術領域</label>
	                                <select class="form-control" name="technology">
	                                	<option>IoT</option>
	                                    <option>Big Data</option>
	                                    <option>數位製造</option>
	                                    <option>資訊安全</option>
	                                    <option>Sensor Network</option>
	                                    <option>CPS</option>
	                                    <option>工業網路</option>
	                                    <option>I4</option>
	                                    <option>其它</option>
	                                </select>
	                            </div>

	                            <div class="form-group">
	                                <label>連結網址</label>
	                                <input id="paper-link" name="link" class="form-control" placeholder="請填入資料連結">
	                            </div>

	                            <textarea id="f-content" id="input-comment"class="form-control" rows="3" name="abstract" placeholder="摘要"></textarea>

	                            <div class="form-group">
	                                <label>作者</label>
	                                <input name="authors" class="form-control" placeholder="請填入作者">
	                                <p class="help-block">如果有多位作者，請以","隔開</p>
	                            </div>

	                            <div class="form-group">
	                                <label>國家</label>
	                                <input name="country" class="form-control" placeholder="請填入此資料出處國家">
	                            </div>

	                            <div class="form-group">
	                                <label>發佈日期西元年</label>
	                                <input name="year" class="form-control" placeholder="請填入此資料發佈日期西元年">
	                            </div>

	                            <div class="form-group">
	                                <label>發佈出處以及單位</label>
	                                <input name="source" class="form-control" placeholder="請填入此資料發佈出處">
	                                <input name="office" class="form-control" placeholder="請填入此資料發佈單位">
	                            </div>

	                            <div class="form-group">
	                                <label>關鍵字</label>
	                                <input name="keywords" class="form-control" placeholder="請填入資料關鍵字">
	                                <p class="help-block">如果有多個關鍵字，請以","隔開</p>
	                            </div>

	                            <div class="form-group">
	                                <label>等級</label>
	                                <div class="radio">
	                                    <label>
	                                        <input type="radio" name="level" id="optionsRadios1" value="初階" checked>初級
	                                    </label>
	                                </div>
	                                <div class="radio">
	                                    <label>
	                                        <input type="radio" name="level" id="optionsRadios2" value="中階">中級
	                                    </label>
	                                </div>
	                                <div class="radio">
	                                    <label>
	                                        <input type="radio" name="level" id="optionsRadios3" value="高階">高級
	                                    </label>
	                                </div>
	                            </div>

	                           
	                            <div class="form-group">
	                                <label>LC&amp;VS</label>
	                                <select class="form-control" name="LCandVS">
	                                	<option>All</option>
	                                    <option>Development</option>
	                                    <option>Instance: maintenance/usage</option>
	                                    <option>Instance:Production</option>
	                                    <option>Instance:maintenance/usage</option>
	                                </select>
	                            </div>

	                            <div class="form-group">
	                                <label>Vertical Layers</label>
	                                <select class="form-control" name="VL">
	                                	<option>All</option>
	                                    <option>Asset</option>
	                                    <option>Integration</option>
	                                    <option>Communication</option>
	                                    <option>Information</option>
	                                    <option>Functional</option>
	                                    <option>Business</option>
	                                </select>
	                            </div>

	                            <div class="form-group">
	                                <label>Horizontal Layers</label>
	                                <select class="form-control" name="HL">
	                                	<option>All</option>
	                                	<option>Product</option>
	                                    <option>Field Device</option>
	                                    <option>Control Device</option>
	                                    <option>Station</option>
	                                    <option>Work Centers</option>
	                                    <option>Enterprise</option>
	                                    <option>Connected World</option>
	                                </select>
	                            </div>

	                            <button type="submit" class="btn btn-success">送出</button>

	                        </form>

	                    </div>
	                </div>
	        	</div>

           		<div id="upload" class="side-body-tab cardview" style="display:none">
           			<!-- Page Heading -->
	                <div class="row">
	                    <div class="col-lg-12 ">
	                        <h4 class="page-header">
	                            上傳大量資料
	                        </h4>
	                        <p>注意! 此處只支援特定格式之Excel資料上傳!</p>
	                    </div>
	                </div>
	                <!-- /.row -->
	                <div class="row">
	                	<div class="col-lg-6">
							{!! Form::open(
							    array(
							        'url' => 'uploadByExcel',
							        'files' => true)) !!}

								<div class="form-group">
								    {!! Form::label('上傳excel檔案') !!}
								    {!! Form::file('image', null) !!}
								</div>

								<div class="form-group">
								    {!! Form::submit('上傳資料') !!}
								</div>
							{!! Form::close() !!}
                        </div>
	                </div>
           		</div>

           		<div id="paper" class="side-body-tab cardview" style="display:none">
           			<!-- Page Heading -->
	                <div class="row">
	                    <div class="col-lg-12 ">
	                        <h4 class="page-header">
	                            審核上傳文章
	                        </h4>
	                    </div>
	                </div>
	                <!-- /.row -->
	                <div class="row">
	                	<div class="col-lg-8">
							<div class="list-group">
							  <?php 
									foreach ($papers as $paper) {
										echo "<a data-target='{$paper->id}' target='_blank' href='view?id={$paper->id}' class='list-group-item'>
											    <h4 class='list-group-item-heading'>{$paper->title}</h4>
											    <p class='list-group-item-text authors-list'>{$paper->authors}</p></a>";
											    
									}
										
								?>
							</div>
                        </div>
	                </div>
           		</div>

           		<div id="people" class="side-body-tab cardview" style="display:none">
           			<!-- Page Heading -->
	                <div class="row">
	                    <div class="col-lg-12 ">
	                        <h4 class="page-header">
	                            審核使用者
	                        </h4>
	                    </div>
	                </div>
	                <!-- /.row -->
	                <div class="row">
	                	
	                </div>
           		</div>

           		<div id="comment" class="side-body-tab cardview" style="display:none">
           			<!-- Page Heading -->
	                <div class="row">
	                    <div class="col-lg-12 ">
	                        <h4 class="page-header">
	                            回覆問題與意見
	                        </h4>
	                    </div>
	                </div>
	                <!-- /.row -->
	                <div class="row">
	                	
	                </div>
           		</div>

           		<div id="analytics" class="side-body-tab cardview" style="display:none">
           			<div class="page-header">
					  <h4>Google Analytics 分析報表 <small> 請登入以瀏覽分析報表 </small></h4>
					</div>
					<pre> 請使用 itriknowledgebase@gmail.com 登入 </pre>
           			<section id="auth-button"></section>
					<section id="view-selector"></section>
					<section id="timeline"></section>
           		</div>


        	</div>
    	</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/admin.js"></script>

	<script>
	(function(w,d,s,g,js,fjs){
	  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
	  js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
	  js.src='https://apis.google.com/js/platform.js';
	  fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
	}(window,document,'script'));
	</script>

	<script>
	gapi.analytics.ready(function() {

	  // Step 3: Authorize the user.

	  var CLIENT_ID = '807712980394-jo9l7nvhpft4th0vma3112camscments.apps.googleusercontent.com';

	  gapi.analytics.auth.authorize({
	    container: 'auth-button',
	    clientid: CLIENT_ID,
	  });

	  // Step 4: Create the view selector.

	  var viewSelector = new gapi.analytics.ViewSelector({
	    container: 'view-selector'
	  });

	  // Step 5: Create the timeline chart.

	  var timeline = new gapi.analytics.googleCharts.DataChart({
	    reportType: 'ga',
	    query: {
	      'dimensions': 'ga:date',
	      'metrics': 'ga:sessions',
	      'start-date': '30daysAgo',
	      'end-date': 'yesterday',
	    },
	    chart: {
	      type: 'LINE',
	      container: 'timeline'
	    }
	  });

	  // Step 6: Hook up the components to work together.

	  gapi.analytics.auth.on('success', function(response) {
	    viewSelector.execute();
	  });

	  viewSelector.on('change', function(ids) {
	    var newIds = {
	      query: {
	        ids: ids
	      }
	    }
	    timeline.set(newIds).execute();
	  });
	});
	</script>
</body>
