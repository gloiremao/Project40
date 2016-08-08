

$(document).ready(function(){

	//handle abstract toggle
	$("button.a_btn").click(function(){
		var target = $(this).attr("data-target");
		$("p[data-target="+ target +"]").toggle();
	});

	$("#smart-btn").click(function(){
		$("#smart-search").toggle();
	});
	

});

function onEnterPress(event){
	if (event.keyCode == 13) {
        document.getElementById("search_btn").click();
        return false;
    }
    return true;
}




