@extends('master')

@section('include-css')
@stop

@section('include-js')
@stop


@section('content')
	@parent

	<head>
		
	</head>

	<div id="content-area">
		
		<div id="info-area" class="container cardview">
			
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">修改資料</a></li>
				<li role="presentation"><a href="#mypaper" aria-controls="mypaper" role="tab" data-toggle="tab">我的文章</a></li>
				<li role="presentation"><a href="#favorite" aria-controls="favorite" role="tab" data-toggle="tab">我的收藏</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<div class="form-group">
                        <form>
                        	<div class="col-md-6 col-md-offset-2">
                            	<label for="password" class=" control-label">原始密碼</label>
                                <input id="password" type="password" placeholder="請填入原始密碼" class="form-control" name="password">
                            </div>
                            <div class="col-md-6 col-md-offset-2">
                            	<label for="password" class=" control-label">修改密碼</label>
                                <input id="password" type="password" placeholder="請填入6位數以上之密碼" class="form-control" name="password">
                                <input id="password" type="password" placeholder="請確認密碼" class="form-control" name="password">
                                <button type="submit" class="btn btn-success">送出</button>
                            </div>

                        </form>
                        
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

@stop

