$(document).ready(function(){

	//bind focus event trigger on input area
	

	/*$('#input-search').bind('focus', function(event) {
        $('html, body').stop().animate({
            scrollTop: $('#search-area').offset().top - 15
        }, 500, 'easeInOutExpo');
        event.preventDefault();
    });*/


	//handle search 
	$("#search_btn").click(function(){
		$("#results-area").css("height","auto");
		$("#results-area").show();
		$("#info-area").animate({height:'0px'},500,function(){
			$("#info-area").hide();
		});
		$('html, body').stop().animate({
            scrollTop: $('#search-area').offset().top -15
        }, 500, 'easeInOutExpo');
		$("#serach_results").html("");
        var keywords = $("#input-search").val();
        $("#show_serach_keywords").html("搜尋結果: "+keywords);
        if(keywords.length > 0 ){
        	search(keywords);
        }
	});

	$("#trend-toggle").click(function(event){
		$("#info-area").css("height","auto");
		$("#info-area").show();
		
		$("#results-area").animate({height:'0px'},500,function(){
			$("#results-area").hide();
		});
		$('html, body').stop().animate({
            scrollTop: $("#info-area").offset().top -15
        }, 500, 'easeInOutExpo');
	})

	//handle abstract toggle
	$("button.a_btn").click(function(){
		var target = $(this).attr("data-target");
		$("p[data-target="+ target +"]").toggle();
	});

	

});

var isMenuOpen = false;

function openNav() {
	if(isMenuOpen){
		closeNav();
	}else{
		document.getElementById("mySidenav").style.width = "250px";
    	$("#main").animate({marginLeft:'250px'},500);
    	isMenuOpen = true;
	}
    
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $("#main").animate({marginLeft:'0px'},500);
    document.body.style.backgroundColor = "white";
    isMenuOpen = 0;
    window.scrollTo(0, 0);
}

function search(keywords){
	//search query
	$.get("search", { query: keywords },
      	function(response) {
         	console.log(response);
         	var papers = JSON.parse(''+response);
         	papers.forEach(function(paper){
         		appendResultHTML(paper.id,paper.id,paper.title,paper.authors,paper.country,paper.abstract);
         	});

         	//handle abstract toggle
			$("button.a_btn").click(function(){
				var target = $(this).attr("data-target");
				$("p[data-target="+ target +"]").toggle();
			});
      	}
   	);
}


function appendResultHTML(paper_id,paper_url,paper_title,paper_authors,paper_info,paper_abstract,paper_type){
	/*var paper_id;
	var paper_url;
	var paper_title;
	var paper_authors;
	var paper_info;
	var paper_abstract;*/
	//default paper
	paper_url = "view?id="+paper_id;
	type_icon = "<i class='fa fa-file-text-o' aria-hidden='true'></i>";
	if(paper_type == "paper"){
		type_icon = "<i class='fa fa-file-text-o' aria-hidden='true'></i>";
	} else if (paper_type == "ppt"){
		type_icon = "<i class='fa fa-file-powerpoint-o' aria-hidden='true'></i>";
	} else if ( paper_type == "pdf"){
		type_icon = '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
	} else if ( paper_type == 'code'){
		type_icon = '<i class="fa fa-file-code-o" aria-hidden="true"></i>';
	}

	var results_html = "<div data-target='"+paper_id
	+"' class='papers'><a href='"+paper_url
	+"'><h4 data-type='title' class='list-group-item-heading'>"+type_icon+" " + paper_title
	+"</h4></a><p data-type='author' class='list-group-item-text author'>"+paper_authors
	+"</p><p data-type='detail-info' class='list-group-item-text'>"+paper_info
	+"</p><button type='button' data-target='"+paper_id
	+"' class='btn btn-link btn-xs a_btn'>Abstract</button><p data-target='"+paper_id
	+"' class='list-group-item-text area-hide'>"+paper_abstract+"</p>";

	$("#serach_results").append(results_html);
}

function onEnterPress(event){
	if (event.keyCode == 13) {
        document.getElementById("search_btn").click();
        return false;
    }
    return true;
}


