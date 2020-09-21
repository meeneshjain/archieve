// JavaScript Document For Add Menu item
 
$(document).ready(function(){
	$("#add").click(function(){
	       $("#add-menu").css({"display":"block"});
	 });
	
	$("#close_add_menu").click(function(){
			$("#add-menu").css({"display":"none"});
	 });
		 	
    $("#add-menu input:text").keyup(function(){
			var $value = $("#menu_list_item").val();
			var menu_link=$("#menu_list_item_link").val();

		    if(isNaN($value) && isNaN(menu_link))
			 {
				$("#msg").text("");
				$("#add_menu_btn").removeAttr("disabled");
			   }
			else
		 	  {
				$("#msg").text("Number not allowed Or Field cannot be left empty.");
				$("#add_menu_btn").attr("disabled","disabled");
				}
	  });
			
	$("#add_menu_btn").click(function(){
		var $value = $("#menu_list_item").val();
		var menu_link=$("#menu_list_item_link").val();
		$("#menu-ul").append("<li class='active'><a href='"+menu_link+"' >"+$value+"</a> </li>");	
	 });
});
