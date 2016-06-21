$(document).ready(function(){

	//bind focus event trigger on input area
	

	$('#input-search').bind('focus', function(event) {
        $('html, body').stop().animate({
            scrollTop: $('#search-area').offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });


	//handle search 
	$("#search_btn").click(function(){
		$("#results-area").show();
		$("#trend-area").animate({height:'0px'},500,function(){
			$("#trend-area").hide();
		});
		$('html, body').stop().animate({
            scrollTop: $('#search-area').offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
	});

	//handle abstract toggle
	$("button.a_btn").click(function(){
		var target = $(this).attr("data-target");
		$("p[data-target="+ target +"]").toggle();
	});

	

});

