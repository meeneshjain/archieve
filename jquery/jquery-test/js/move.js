// JavaScript Document for Move Menu Item

jQuery(document).ready(function(){	

		$("#move-menu").click(function(){
			   $("#rearrange-menu").css({"display":"block"});
		 });
		
		$("#save_rearrange").click(function(){
				$("#rearrange-menu").css({"display":"none"});
		 });
	   
	   $("#move-menu").click(function(){
			   $("#menu-ul li").css({"cursor":"move"});
			   $("li a").addClass("disabled");
			   $("#menu-ul").sortable();
			   $("#save_rearrange").css({"display":"block"});
		  });
	 	  
	  	$("#save_rearrange").click(function(){
				$("#menu-ul").sortable('disable')
					$("ul li").removeClass("border_anything");
						$("li a").removeClass("disabled");
						$("#save_rearrange").hide();
			});
	 });