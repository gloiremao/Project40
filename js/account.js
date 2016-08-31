var tabTag = location.hash;

$(document).ready(function(){
	
	if (tabTag == "#mypaper" || tabTag == "#favorite" || tabTag == "#upload"){
		$(".tab-pane").removeClass("active");
		$(".nav-tabs li").removeClass("active");
		$(tabTag).addClass("active");
		$(tabTag+"-nav").addClass("active");
	} else {
		$("#home").css("padding-top","100px");
		$("#home").animate({'padding-top': '0px'},500);
		$("#profile-card").fadeIn(300);
		$("#pwd-card").fadeIn(500);
	}

	$("#favorite-btn").click(function(event){
		event.preventDefault();
		$(".tab-pane").removeClass("active");
		$(".nav-tabs li").removeClass("active");
		$("#favorite").addClass("active");
		$("#favorite-nav").addClass("active");
	});

	$("#myupload-btn").click(function(event){
		event.preventDefault();
		$(".tab-pane").removeClass("active");
		$(".nav-tabs li").removeClass("active");
		$("#mypaper").addClass("active");
		$("#mypaper-nav").addClass("active");
	});


});