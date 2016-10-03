$(document).ready(function(){

	$("#btn-submit").click(function(){
		var title = $("#f-title").val();
		var content = $("#f-content").val();
		if(title.lenght == 0 || content.lenght == 0){
			//$this.popover('show');
			alert("標題與內文不可為空");
		}else{
			$.post("forum/post", 
				{ 
					title: title,
					content: content
				},
		      	function(response) {
		         	console.log(response);
		      	}
		   	);
		}
		
	});


});