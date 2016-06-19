$(document).ready(function(){

	//bind focus event trigger on input area
	$("#input-search").focus(function(){
		$("header").animate({opacity:0,height:'0px','margin-top':'0px',},750);
	});


	//handle search 
	$("#search_btn").click(function(){
		$("#results-area").show();
	});

});