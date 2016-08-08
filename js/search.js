$(document).ready(function(){

	//search
	var _query = getParameterByName("query");
	$("#input-search").val(_query);
	search(_query);
	//handle search 
	$("#search_btn").click(function(){

		var keywords = $("#input-search").val();
		if(keywords.length > 0 ){
			
			$('html, body').stop().animate({
	            scrollTop: $('#search-area').offset().top -15
	        }, 500, 'easeInOutExpo');

			// clear previous results
			$("#serach_results").html("");
			$("#serach-nav").html("");
			cur_iter = 0;
			count = 0;
	        
	        search(keywords);
        }
		
        
	});

	//handle abstract toggle
	$("button.a_btn").click(function(){
		var target = $(this).attr("data-target");
		$("p[data-target="+ target +"]").toggle();
	});	

});

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var cur_iter = 0;
var count = 0;

function search(keywords){
	//search query
	$("#show_serach_keywords").html("搜尋結果: "+keywords);
	$("#loading").show();
	$.get("search/query", { query: keywords },
      	function(response) {
         	//console.log(response);
         	searchResultsHandler(response);
      	}
   	);
}

function searchResultsHandler(response){

	$("#loading").hide();
 	var papers = JSON.parse(''+response);
 	$("#show_serach_keywords").append(", 共 " + papers.length + " 筆資料");
 	if(papers.length > 10){

 		$("#serach-nav").append('<li id="prev" data-target="#" class="disabled" ><a id="page-prev" data-target="#" class="nav-iter" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>');
 	}
 	papers.forEach(function(paper){
 		if(count%10 == 0){
			$("#serach_results").append("<div id='page-"+parseInt(count/10)+"' class='page area-hide'></div>");
			$("#serach-nav").append('<li data-target="'+parseInt(count/10)+'" ><a data-target="'+parseInt(count/10)+'" class="nav-iter">'+parseInt(count/10 + 1)+'</a></li>');
		}

		appendResultHTML(paper.id,paper.id,paper.title,paper.authors,paper.country,paper.abstract,paper.type);
 		
 		count++;
 	});
 	
 	$("#page-0").show();
 	$("li[data-target='0']").addClass("active");
 	if(papers.length > 10){
 		$("#serach-nav").append('<li id="next" ><a id="page-next" class="nav-iter" data-target="'+(cur_iter+1)+'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>');
 	}


 	$("a.nav-iter").click(function(){
 		var target = $(this).attr("data-target");
 		if (target != '#'){
 			$(".page").hide();
     		$("#page-"+target).show();
     		$("#serach-nav li").removeClass("disabled");
     		$("#serach-nav li").removeClass("active");
     		$("#serach-nav li[data-target='"+parseInt(target)+"']").addClass("active");
     		cur_iter = parseInt(target);
     		if(cur_iter != 0){
     			$("#page-prev").attr("data-target",""+(cur_iter-1));
     		}else{
     			$("#prev").addClass("disabled");
     			$("#page-prev").attr("data-target","#");
     		}
     		if(cur_iter != parseInt(papers.length/10)){
     			$("#page-next").attr("data-target",""+(cur_iter+1));
     		}else{
     			$("#next").addClass("disabled");
     			$("#page-next").attr("data-target","#");
     		}
     		$('html, body').stop().animate({
	            scrollTop: $("#results-area").offset().top - 15
	        }, 500, 'easeInOutExpo');
 		}
 	});

 	//handle abstract toggle
	$("button.a_btn").click(function(){
		var target = $(this).attr("data-target");
		$("p[data-target="+ target +"]").toggle();
	});


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
	if(paper_type == "論文"){
		type_icon = "<i class='fa fa-file-text-o' aria-hidden='true'></i>";
	} else if (paper_type == "簡報"){
		type_icon = "<i class='fa fa-file-powerpoint-o' aria-hidden='true'></i>";
	} else if ( paper_type == "影片"){
		type_icon = '<i class="fa fa-file-video-o" aria-hidden="true"></i>';
	} else if ( paper_type == '公告'){
		type_icon = '<i class="fa fa-file-o" aria-hidden="true"></i>';
	} else if ( paper_type == "專利"){
		type_icon = '<i class="fa fa-file-o" aria-hidden="true"></i>';
	} else if ( paper_type == "標準"){
		type_icon = '<i class="fa fa-file-o" aria-hidden="true"></i>';
	} else if ( paper_type == "型錄"){
		type_icon = '<i class="fa fa-files-o" aria-hidden="true"></i>';
	} else if ( paper_type == "其它"){
		type_icon = '<i class="fa fa-file-o" aria-hidden="true"></i>';
	}

	var results_html = "<div data-target='"+paper_id
	+"' class='papers'><a href='"+paper_url
	+"' target='_blank'><h4 data-type='title' class='list-group-item-heading'>"+type_icon+" " + paper_title
	+"</h4></a><p data-type='author' class='list-group-item-text author'>"+paper_authors
	+"</p><p data-type='detail-info' class='list-group-item-text'>"+paper_info
	+"</p><button type='button' data-target='"+paper_id
	+"' class='btn btn-link btn-xs a_btn'>Abstract</button><p data-target='"+paper_id
	+"' class='list-group-item-text area-hide'>"+paper_abstract+"</p></div>";

	$("#page-"+parseInt(count/10)).append(results_html);

}

function onEnterPress(event){
	if (event.keyCode == 13) {
        document.getElementById("search_btn").click();
        return false;
    }
    return true;
}