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
		$("#statistic").hide();
		$("#results-area").css("height","auto");
		$("#results-area").show();
		$("#info-area").animate({height:'0px'},500,function(){
			$("#info-area").hide();
		});
		$('html, body').stop().animate({
            scrollTop: $('#search-area').offset().top -15
        }, 500, 'easeInOutExpo');
		// clear
		$("#serach_results").html("");
		$("#serach-nav").html("");
		cur_iter = 0;
		count = 0;
        var keywords = $("#input-search").val();
        $("#show_serach_keywords").html("搜尋結果: "+keywords);
        if(keywords.length > 0 ){
        	search(keywords);
        }
	});

	$("#new-btn").click(function(event){
		$("#statistic").hide();
		$("#hot-paper").hide();
		$("#hot-author").hide();
		$("#info-area").css("height","auto");
		$("#info-area").show();
		$("#new-paper").show();
		
		$("#results-area").animate({height:'0px'},500,function(){
			$("#results-area").hide();
		});
		$('html, body').stop().animate({
            scrollTop: $("#info-area").offset().top -15
        }, 500, 'easeInOutExpo');
	})

	$("#hot-btn").click(function(event){
		$("#statistic").hide();
		$("#new-paper").hide();
		$("#info-area").css("height","auto");
		$("#info-area").show();
		$("#hot-paper").show();
		$("#hot-author").show();
		
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

	$("#smart-btn").click(function(){
		$("#smart-search").toggle();
	});
	

});

var cur_iter = 0;
var count = 0;

function search(keywords){
	//search query
	$.get("search", { query: keywords },
      	function(response) {
         	//console.log(response);
         	var papers = JSON.parse(''+response);
         	
         	if(papers.length > 10){

         		$("#serach-nav").append('<li id="prev" data-target="#" class="disabled" ><a id="page-prev" data-target="#" class="nav-iter" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>');
         	}
         	papers.forEach(function(paper){
         		if(count%10 == 0){
					$("#serach_results").append("<div id='page-"+parseInt(count/10)+"' class='page area-hide'></div>");
				}

				appendResultHTML(paper.id,paper.id,paper.title,paper.authors,paper.country,paper.abstract);

				if(count%10 == 9){
					$("#serach-nav").append('<li data-target="'+parseInt(count/10)+'" ><a data-target="'+parseInt(count/10)+'" class="nav-iter">'+parseInt(count/10 + 1)+'</a></li>');
				}
         		
         		count++;
         	});
         	
         	$("#page-0").show();
         	$("li[data-target='0']").addClass("active");
         	if(papers.length > 10){
         		$("#serach-nav").append('<li id="next" ><a id="page-next" class="nav-iter" data-target="'+(cur_iter+1)+'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>');
         	}


         	$("a.nav-iter").click(function(){
         		var target = $(this).attr("data-target");
         		$(".page").hide();
         		$("#page-"+target).show();
         		$("li").removeClass("disabled");
         		$("li").removeClass("active");
         		$("li[data-target='"+parseInt(target)+"']").addClass("active");
         		cur_iter = parseInt(target);
         		if(cur_iter != 0){
         			$("#page-prev").attr("data-target",""+(cur_iter-1));
         		}else{
         			$("#prev").addClass("disabled");
         			$("#page-prev").attr("data-target","#");
         		}
         		if(cur_iter != parseInt(papers.length/10 - 1)){
         			$("#page-next").attr("data-target",""+(cur_iter+1));
         		}else{
         			$("#next").addClass("disabled");
         			$("#page-next").attr("data-target","#");
         		}
         		$('html, body').stop().animate({
		            scrollTop: $("#results-area").offset().top - 15
		        }, 500, 'easeInOutExpo');
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


