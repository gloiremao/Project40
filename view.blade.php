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
		<div class="page-header">
		  	<h3 class="paper-title"><a <?php echo "href='{$paper->link}'" ?> ><i class="fa fa-file-text-o" aria-hidden="true"></i> <?php echo $paper->title ?></a></h3>
		  	<p>關鍵字: <?php echo $paper->keywords ?></p>
		</div>
		<div class="paper-info">
			<table class="paper-table">
			  <tr>
			    <td class="table-title">連結網址</td>
			    <td class="table-info"><?php echo "<a href='{$paper->link}'>{$paper->link}</a>" ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">作者</td>
			    <td class="table-info"><?php echo $paper->authors ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">國家</td>
			    <td class="table-info"><?php echo $paper->country ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">發佈日期</td>
			    <td class="table-info"><?php echo $paper->year ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">出處 </td>
			    <td class="table-info"><?php echo $paper->source ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">單位</td>
			    <td class="table-info"><?php echo $paper->office ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">關鍵字</td>
			    <td class="table-info"><?php echo $paper->keywords ?></td>
			  </tr>
			  <tr>
			    <td class="table-title">等級</td>
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
			</table>
		</div>

		<div class="page-header">
		  	<h4><i class="fa fa-comments-o" aria-hidden="true"></i> 評論與問題回報</h4>
		</div>
		<textarea id="input-comment"class="form-control" rows="3" placeholder="發表評論或問題回報"></textarea>
		<button id="btn-commit" class="btn btn-default" type="submit">送出</button>

	</div>

</div>
@stop
	
	
	