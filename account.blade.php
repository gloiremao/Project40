@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/account.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/account.js"></script>
	<script type="text/javascript">
	function validateForm() {
	   	var title = $("#paper-title").val();
	   	var content = $("#paper-link").val();
	    if (title == "" || content == "") {
	    	alert("標題與連結不可為空。");
	        return false;
	    } else {
	    	return true;
	    }
	}
	</script>
@stop


@section('content')
	@parent

	<div id="top-bannar">
		
	</div>

	<div id="content-area">
		
		<div id="info-area" class="container cardview">
			
			<div class="row">
				<div id="sidemenu" class="col-md-2">
					<!-- Nav tabs -->
					<div id="profile">
						<img src="img/user.png">
						<p id="name">{{ $user['name'] }}</p>
					</div>
					<ul class="nav nav-tabs" role="tablist">
						<li id="home-nav" role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('string.modify')}}</a></li>
						<li id="mypaper-nav" role="presentation"><a href="#mypaper" aria-controls="mypaper" role="tab" data-toggle="tab">{{ trans('string.myuploaded')}}</a></li>
						<li id="favorite-nav" role="presentation"><a href="#favorite" aria-controls="favorite" role="tab" data-toggle="tab">{{ trans('string.myfavorite')}}</a></li>
						<li id="upload-nav" role="presentation"><a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">{{ trans('string.upload')}}</a></li>
					</ul>
				</div>
				<!-- Tab panes -->
				<div class="col-md-10">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div id="profile-card" class="form-group cardview">
		                        <form>
		                        	<div>
		                        		<h4><i class="fa fa-user" aria-hidden="true"></i> {{ trans('string.profile')}}</h4>
		                            	<table class="paper-table">
											  <tr>
											    <td class="table-title">{{ trans('string.identity')}}</td>
											    <td class="table-info"><p>{{ $user['identity'] }}</p></td>
											  </tr>
											  <tr>
											    <td class="table-title">{{ trans('string.cellphone')}}</td>
											    <td class="table-info"><p>{{ $user['telephone'] }}</p></td>
											  </tr>
											  <tr>
											    <td class="table-title">{{ trans('string.email')}}</td>
											    <td class="table-info"><p>{{ $user['email'] }}</p></td>
											  </tr>
											  <tr>
											    <td class="table-title">{{ trans('string.company')}}</td>
											    <td class="table-info"><p>{{ $user['school'] }}{{ $user['major'] }}</p></td>
											  </tr>
										</table>
		                            </div>
		                        </form>
		                    </div>
		                   
							<div id="pwd-card" class="form-group cardview">
								<div class="row">
									<div class="col-md-6">
				                        <form>
				                        	<h4><i class="fa fa-key" aria-hidden="true"></i> {{ trans('string.modify_pwd')}}</h4>
				                        	<div >
				                            	<label for="password" class=" control-label">{{ trans('string.origin_pwd')}}</label>
				                                <input id="password" type="password" placeholder="{{ trans('string.origin_pwd_holder')}}" class="form-control" name="password">
				                            </div>
				                            <div >
				                            	<label for="password" class=" control-label">{{ trans('string.modify_pwd')}}</label>
				                                <input id="password" type="password" placeholder="{{ trans('string.password_holder')}}" class="form-control" name="password">
				                                <input id="password" type="password" placeholder="{{ trans('string.confirmed_password')}}" class="form-control" name="password">
				                                
				                            </div>
				                            <button id="pwd-submit-btn" type="submit" class="btn btn-success">{{ trans('string.submit-btn')}}</button>
				                        </form>
			                        </div>
		                    	</div>    	
		                    </div>

						</div>
						<div role="tabpanel" class="tab-pane" id="mypaper">
							<div class="cardview info-tab">
								<div class="page-header">
								  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> {{ trans('string.myuploaded')}}</h4>
								</div>
								<div class="list-group">
								  <?php 
											/*foreach ($papers as $paper) {
												echo "<a data-target='{$paper->id}' target='_blank' href='view?id={$paper->id}' class='list-group-item'>
													    <h4 class='list-group-item-heading'>{$paper->title}</h4>
													    <p class='list-group-item-text'>{$paper->authors}</p>
													  </a>";
											}*/
											
										?>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="favorite">
							<div class="cardview info-tab">
								<div class="page-header">
								  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> {{ trans('string.myfavorite')}}</h4>
								</div>
								<div class="list-group">
								  <?php 
											/*foreach ($papers as $paper) {
												echo "<a data-target='{$paper->id}' target='_blank' href='view?id={$paper->id}' class='list-group-item'>
													    <h4 class='list-group-item-heading'>{$paper->title}</h4>
													    <p class='list-group-item-text'>{$paper->authors}</p>
													  </a>";
											}*/
											
										?>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="upload">
							<div class="cardview info-tab">
								<div class="page-header">
								  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> {{ trans('string.upload')}}</h4>
								</div>
								<div class="row">
									<div class="col-lg-8">
										
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
						</div>
					</div>
				</div>
			</div>

			
			

		</div>

	</div>

@stop

