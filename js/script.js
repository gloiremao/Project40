$(document).ready(function(){

	//bind focus event trigger on input area
	

	$('#input-search').bind('focus', function(event) {
        $('html, body').stop().animate({
            scrollTop: $('#search-area').offset().top
        }, 500, 'easeInOutExpo');
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
        }, 500, 'easeInOutExpo');
        event.preventDefault();
	});

	//handle abstract toggle
	$("button.a_btn").click(function(){
		var target = $(this).attr("data-target");
		$("p[data-target="+ target +"]").toggle();
	});

	

});

function search(keywords){
	//search query
	$.get("search.php", { query: keywords },
      	function(response) {
         	$('#stage').html(data);
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
	if(paper_type == "paper"){
		type_icon = "<i class='fa fa-file-text-o' aria-hidden='true'></i>"
	} else if (paper_type = "ppt"){
		type_icon = "<i class='fa fa-file-powerpoint-o' aria-hidden='true'></i>";
	} else if ( paper_type = "pdf"){
		type_icon = '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
	} else if ( paper_type = 'code'){
		type_icon = '<i class="fa fa-file-code-o" aria-hidden="true"></i>';
	}

	var results_html = "<div data-target='"+type_icon+" "+paper_id
	+"' class='papers'><a href='"+paper_url
	+"'><h4 data-type='title' class='list-group-item-heading'>"+paper_title
	+"</h4></a><p data-type='author' class='list-group-item-text author'>"+paper_authors
	+"</p><p data-type='detail-info' class='list-group-item-text'>"+paper_info
	+"</p><button type='button' data-target='"+paper_id
	+"' class='btn btn-link btn-xs a_btn'>Abstract</button><p data-target='"+paper_id
	+"' class='list-group-item-text area-hide'>"+paper_abstract+"</p>";

	$("#serach_results").append(results_html);
}


