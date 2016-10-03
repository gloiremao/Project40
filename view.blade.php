@extends('master')

@section('include-css')
	<link rel="stylesheet" type="text/css" href="css/view.css">
@stop

@section('include-js')
	<script type="text/javascript" src="js/view.js"></script>
@stop

@section('content')
	@parent
<div id="content-area">
	
	<div id="paper" <?php echo 'data-target="{$paper->id}"' ?> class="container cardview">
		<div class="page-header col-md-11">
		  	<h3 class="paper-title"><a <?php echo "href='{$paper->link}'" ?> ><i class="fa fa-file-text-o" aria-hidden="true"></i> <?php echo $paper->title ?></a></h3>
		  	<p>{{ trans('string.keyword')}}: 
		  		<?php 
		  			$keywords_arr = explode(",", $paper->keywords);
		  			foreach ($keywords_arr as $i => $keyword) {
		  				if($i != 0) echo ", ";
		  				echo $keyword;
		  			}
		  		?>		  		
		  	</p>
		</div>
		<div id="like" class="col-md-1">
			
		  	
		  	<?php
		  		if( $paper->checked == 0 && $userType == 1) {
		  			
						
					
		  			echo "<form role='form' method='POST' action='view/confirm'>";
		  			echo csrf_field();
		  			echo	"<input name='id' value='{$paper->id}' type='hidden' style='visibility='>
		  					<button type='submit' class='btn btn-danger'><i class='fa fa-check-square' aria-hidden='true'></i> 確認審核</button>
	  					</form>";
		  		}else {
		  			echo "<button type='button' class='btn btn-danger'><i class='fa fa-heart' aria-hidden='true'></i> ";
		  			echo trans('string.favorite');
		  			echo "</button>";
		  		}
		  		
		  	?>
		</div>
		<div class="paper-info">
			<table class="paper-table">
			  <tr>
			    <td class="table-title">{{ trans('string.abstract')}}</td>
			    <td class="table-info"><p><?php echo $paper->abstract ?></p></td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.link')}}</td>
			    <td class="table-info"><?php echo "<a href='{$paper->link}'>{$paper->link}</a>" ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.author')}}</td>
			    <td class="table-info"><?php echo $paper->authors ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.country')}}</td>
			    <td class="table-info"><?php echo $paper->country ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.published_date')}}</td>
			    <td class="table-info"><?php echo $paper->year ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.from')}}</td>
			    <td class="table-info"><?php echo $paper->source ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.unit')}}</td>
			    <td class="table-info"><?php echo $paper->office ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.keyword')}}</td>
			    <td class="table-info">
				    <?php 
			  			$keywords_arr = explode(",", $paper->keywords);
			  			foreach ($keywords_arr as $i => $keyword) {
			  				if($i != 0) echo ", ";
			  				echo $keyword;
			  			}
		  			?>
			    </td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.level')}}</td>
			    <td class="table-info"><?php echo $paper->level ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">LC&amp;VS</td>
			    <td class="table-info"><?php echo $paper->LCandVS ?></td>
			  </tr>
			  <tr>
			    <td class="table-title"> Vertical Layers</td>
			    <td class="table-info"><?php echo $paper->VL ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">Horizontal Layers</td>
			    <td class="table-info"><?php echo $paper->HL ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">{{ trans('string.views')}}</td>
			    <td class="table-info"><?php echo $paper->count ?></td>
			  </tr>
			</table>
		</div>

		<div class="page-header">
		  	<h4><i class="fa fa-comments-o" aria-hidden="true"></i> {{ trans('string.comment_title')}}</h4>
		</div>
		<textarea id="input-comment"class="form-control" rows="3" placeholder="{{ trans('string.comment_content')}}"></textarea>
		<button id="btn-commit" class="btn btn-default" type="submit">{{ trans('string.submit-btn')}}</button>

	</div>

</div>
@stop
	
	
	