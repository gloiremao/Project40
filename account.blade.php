@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/account.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/account.js"></script>
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
						<p id="name">王大明</p>
					</div>
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">修改資料</a></li>
						<li role="presentation"><a href="#mypaper" aria-controls="mypaper" role="tab" data-toggle="tab">我的文章</a></li>
						<li role="presentation"><a href="#favorite" aria-controls="favorite" role="tab" data-toggle="tab">我的收藏</a></li>
					</ul>
				</div>
				<!-- Tab panes -->
				<div class="col-md-10">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active " id="home">
							<div id="profile-card" class="form-group cardview area-hide">
		                        <form>
		                        	<div>
		                        		<h4><i class="fa fa-user" aria-hidden="true"></i> 個人檔案</h4>
		                            	<table class="paper-table">
											  <tr>
											    <td class="table-title">身分別</td>
											    <td class="table-info"><p>管理員</p></td>
											  </tr>
											  <tr>
											    <td class="table-title">通訊電話</td>
											    <td class="table-info"><p>0912XXXXXX</p></td>
											  </tr>
											  <tr>
											    <td class="table-title">帳號</td>
											    <td class="table-info"><p>itri@itri.org.tw</p></td>
											  </tr>
											  <tr>
											    <td class="table-title">單位</td>
											    <td class="table-info"><p>工業技術研究院</p></td>
											  </tr>
										</table>
		                            </div>
		                        </form>
		                    </div>
		                   
							<div id="pwd-card" class="form-group cardview area-hide">
								<div class="row">
									<div class="col-md-6">
				                        <form>
				                        	<h4><i class="fa fa-key" aria-hidden="true"></i> 修改密碼</h4>
				                        	<div >
				                            	<label for="password" class=" control-label">原始密碼</label>
				                                <input id="password" type="password" placeholder="請填入原始密碼" class="form-control" name="password">
				                            </div>
				                            <div >
				                            	<label for="password" class=" control-label">修改密碼</label>
				                                <input id="password" type="password" placeholder="請填入6位數以上之密碼" class="form-control" name="password">
				                                <input id="password" type="password" placeholder="請確認密碼" class="form-control" name="password">
				                                
				                            </div>
				                            <button id="pwd-submit-btn" type="submit" class="btn btn-success">送出</button>
				                        </form>
			                        </div>
		                    	</div>    	
		                    </div>

						</div>
						<div role="tabpanel" class="tab-pane" id="mypaper">
							<div id="new-tab" class="cardview info-tab">
								<div class="page-header">
								  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> 我的文章</h4>
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
							<div id="new-tab" class="cardview info-tab">
								<div class="page-header">
								  	<h4 class="section-title"><i class="fa fa-bolt" aria-hidden="true"></i> 我的收藏</h4>
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
					</div>
				</div>
			</div>

			
			

		</div>

	</div>

@stop

