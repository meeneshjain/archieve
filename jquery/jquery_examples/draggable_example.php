<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style>
.menu_bar
{
	background:url("header.png");
		padding:6px;	
	
}

.menu_bar a
{
	/*background:#44619D;*/
	padding:6px;
	color:white;
	font-weight:bold;
	text-decoration:none;
}
.menu_bar a:hover
{
	
  /* text-decoration:none;*/
	border:1px thin green;
	color:Green;
}
#save 
{
	background: green;
	border: none;
	color: #fff;
	padding: 5px 10px;
	clear: both;
	margin: 15px 0;
	border-radius: 3px;
	box-shadow: #999 1px 1px 2px;
}
#save_change 
{
	background: green;
	border: none;
	color: #fff;
	padding: 5px 10px;
	clear: both;
	margin: 15px 0;
	border-radius: 3px;
	box-shadow: #999 1px 1px 2px;
}

.save_button
{
    background-color:#093;
	color: #fff;
	border: 1px solid #555;
	border-radius:3px;

}
.close_button
{
    background-color:#F00;
	color: #fff;
	border: 1px solid #555;
	border-radius:3px;

}
.p
{
	width:auto;
	padding:5px;
}
.p ul 
{
	list-style:none;
	text-decoration:none;
	display:inline;

	
	
}
.p ul li 
{
	float:left;
	
	border-right:1px solid black;
}	
.p ul li a
{
	padding:5px;
}
ul li:last-child
{
	border-right:none;
}

#menu
{
	border:3px dashed gray;
	height:auto;
	width:500px;
	padding:5px;

	
}
#customize_menu
{
	border:3px dashed gray;
	height:auto;
	width:500px;
	
}
body
{
	background:#F6F4F0;
}

.border_anything
{
	border:3px dashed gray;
	width:auto;
	padding:4px;
	
}
</style>
<link href="jquery_colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
   <script src="jquery-2.0.3.js"></script>
   <script>
  
$(document).ready(function(){
	$("#add").click(function(){
	$("#menu").css({"display":"block"});
	
	   });
	
		$("#close_div").click(function(){
		$("#menu").css({"display":"none"});
		 });
		 	
			$("#menu_list_item").keyup(function(){
				var $value = $("#menu_list_item").val();
			
					if(isNaN($value))
					{
						$("#para2").text("");
						$("#add_menu").removeAttr("disabled");
						$("#add_menu").addClass("save_button"); 
					}
					else
					{
						$("#para2").text("number not allowed");
						$("#add_menu").attr("disabled","disabled");
						$("#add_menu").removeClass("save_button");
						
					}
				});
			
			$("#add_menu").click(function(){
				var $value = $("#menu_list_item").val();
				
				$("#ul").append("<li><a href='#' class='menu_link'>"+$value+"</a> </li>");	
			});

			
			$("#remove").click(function(){
				
			
				$("li").css({"background":"#F6C7B3"});
				$("#save").css({"display":"block"});
				
				$("li").click(function(){
					$(this).hide("slow");
				
					});
				
				});

		$("#save").click(function(){
			
			$("li").css({"background":"#F6F4F0"});
			$("#save").hide(function(){
				$("li").unbind("click");
				$("#para3").text("Save Successfully");
				$('#para3').fadeOut(2000);
				
				});
			
			
			});
	$("#customize").click(function(){
		$("#customize_menu").css({"display":"block"});
		});

		$("#close_custome").click(function(){
		$("#customize_menu").css({"display":"none"});
		});
		
		$("#ok").click(function(){
			
			text_color=$("#text_color").val();
			 bgcolor=$("#bgcolor").val();
			 border_select=$("#border_select").val();
			 border_number=$("#border_number").val();
			 border_color=$("#border_color").val();
		
		//	$("#para4").text('text color : '+text_color+' background color'+bgcolor+''+'border select'+border_select+"border_number"+border_number)
			$("#ul").removeClass("p");
		$("#para_menu").css({'background-color':bgcolor,'border':border_number+'px'+' '+border_select+' '+border_color});
			$(".menu_link").css({"color":text_color});
		});
		
		
		$("#edit_menu_item").click(function(){
			$("#save_change").css({"display":"block"});
			$("li").css({"background":"#F6C7B3"});
			
			
			});
		
		$("#save_change").click(function(){
			
			$("li").css({"background":"#F6F4F0"});
			$("#save_change").hide(function(){
				$("li").unbind("click");
				$("#para3").text("Save Successfully");
				$('#para3').fadeOut(2000);
			});	
		});
	});

	
	</script>
    
    
 </head>
 <body>
 <div class="menu_bar"><a href="#" id="add"> Add Menu  </a>
  <a href="#" id="customize"> Customise Menu  </a>
  <a href="#" id="edit_menu_item"> Edit Menu  </a>
  <a href="#" id="move"> Move Menu  </a>
 <a href="#" id="remove"> Remove Menu  </a>
 
</div>
<br>
<br>


<div class="p" id="para_menu">
    <ul id="ul" class="p">   </ul>

    <button id="save_drag" style="display:none; border:1px dashed" class="btn btn-success"> Save </button>
</div>
<button id="save" style="display:none; border:1px dashed" class="btn btn-success"> Save </button>
<button id="save_change" style="display:none; border:1px dashed" class="btn btn-success"> Save </button>
<p id="para3"></p>

<span id="span1"> </span>
<div id="menu" style="display:none">

<label>Menu list Item Name</label>&nbsp; : &nbsp;

	<input type="text" name="menu_list_item" id="menu_list_item" />
	<button name="btn" id="add_menu" class="btn btn-primary"
    disabled="disabled" >Add</button>
    <button name="btn2" id="close_div" class="btn btn-dangers">Close </button>
<p id="para2"> </p>
</div>

<br>
<br>
<br>

<div id="customize_menu" style="display:none" >
  <table width="100%" >
    <tr>
      <td height="32" colspan="3"><strong>Customize Your Menu</strong></td>
    </tr>
    <tr>
      <td width="132" height="32">Border : </td>
      <td width="183" colspan="2">
      <div class="col-xs-2">
      <input type="number" placeholder="In px" min="1" max="5" size="5" maxlength="2" id="border_number" value="1"  ></div>
           <div class="col-xs-3"> 
          <select name="select" id="border_select">
          <option value="none" selected>none</option>
          <option value="solid">solid</option>
             <option value="dashed">dashed</option></select></div>
           <div class="col-xs-4">    <input type="text" id="border_color" value="" placeholder="Color name or code with '#'" maxlength="7" size="30" class="form-control bscp" ></div>
</td>
    </tr>
    <tr>
      <td>Background :</td>
      <td> <input type="text" id="bgcolor" value="#F6F4F0" placeholder="Color name or code with '#'" maxlength="7" size="30" class="form-control bscp" >
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Text Color :</td>
      <td> <input type="text" value="blue"  id="text_color" placeholder="Color name or code with '#'" maxlength="7" size="30" class="form-control bscp"></button></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Ok" id="ok" value="Done" class="btn btn-success">
        <input type="submit" name="closed" id="close_custome" value="Close" class="btn btn-danger"></td>
      <td><p id="para4">&nbsp;</p></td>
    </tr>
  </table>
 </div>     

<script src="jquery_colorpicker/jqcolorpicker.js"></script>
<script src="jquery_colorpicker/bootstrap-colorpicker.min.js"></script>
       
        <script>
		     $(document).ready(function(){
			    $(function() {
                var _createColorpickers = function() {
                    $('#bgcolor').colorpicker({
                        format: 'hex'
                    });
               }
                _createColorpickers();
            });
			   
			   });
			   
			   $(document).ready(function(){
			    $(function() {
                var _createColorpickers = function() {
                    $('#border_color').colorpicker({
                        format: 'hex'
                    });
               }
                _createColorpickers();
            });
	   });


$(document).ready(function(){
			    $(function() {
                var _createColorpickers = function() {
                    $('#text_color').colorpicker({
                        format: 'hex'
                    });
               }
                _createColorpickers();
            });
			   
			   });
        </script>
        
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
     <script>
	    jQuery(document).ready(function(){
		 	$("#move").click(function(){
						$("li").css({"background":"#F6F4F0"});
					$("#ul li").addClass("border_anything");
						$("#save_drag").css({"display":"block"});
						$("#para_menu").draggable();
						
				  });
		 });
    
     </script>
    </body>
</html>