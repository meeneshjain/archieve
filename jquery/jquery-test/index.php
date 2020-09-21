<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>jQuery Menu Example Site</title>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.0.3.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/addmenuitem.js"></script>
    <script src="js/move.js" ></script>
    
</head>
 <body>
 <!-- Top Nav Start -->
   <div class="navbar navbar-default navbar-fixed-top">
     <div class="container">
      <ul class="nav navbar-nav">
       <li class=""> <a href="#" id="add"> <i class="icon-plus"></i>  Add Menu  </a></li>
       <li> <a href="#" id="customize"> <i class="icon-cog"></i> Customise Menu  </a></li>
       <li> <a href="#" id="edit_menu_item"> <i class="icon-pencil"></i> Edit Menu  </a></li>
       <li>  <a href="#" id="move-menu"> <i class="icon-move"></i> Move Menu  </a></li>
       <li><a href="#" id="remove"> <i class="icon-trash"></i> Remove Menu  </a></li>
      </ul>
     </div>
  </div>
 <!-- Top Nav End --> 
  
<!-- Container Start -->
<div class="container">
 <div class="mid-box">
   <div class="row">
 <!-- Menu setting box Start -->
   <div class="col-lg-4">
       <div class="page-header">
         <h4>Menu Setting</h4>         
       </div>
  <!-- Add Menu  box Start -->
       <div class="panel panel-primary" style="display:none" id="add-menu">
          <div class="panel-heading"> 
             <h3 class="panel-title">Add Menu</h3>
          </div>  
          <div class="panel-body">
             <div class="form-group">
                <label class="control-label" for="inputDefault">Menu Name</label>
                <input name="menu_list_item" id="menu_list_item" class="form-control" type="text" placeholder="Menu Name">
             </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Menu Url</label>
                <input name="menu_list_item" id="menu_list_item_link" class="form-control" type="text" placeholder="http://www.example.com">
             </div>
             <div class="form-group">
                <button name="add-menu-btn" id="add_menu_btn"  class="btn btn-primary"  disabled="disabled">Add</button>
                <button name="close-add-menu" id="close_add_menu" class="btn btn-dangers">Close </button>
             </div>
             <p  id="msg"class="text-danger"></p>
           </div>
         </div>       
  <!-- Add Menu  box end --> 
  <!-- Move Menu item box Start --> 
   <div class="panel panel-success" style="display:none" id="rearrange-menu">
              <div class="panel-heading">
                <h3 class="panel-title">Rearrange Menu Item</h3>
              </div>
              <div class="panel-body">
                Drag and Drop to Rearrange Menu Item and save to continue.<br><br>
              <button id="save_rearrange" style="display:none;" class="btn btn-success"> Save </button>
             </div>
            </div>
<!-- Move Menu Item box end --> 


     </div>
      <!-- Menu setting box end -->
  <!-- Menu Output box Start -->
     <div class="col-lg-8">
        <div class="page-header">
           <h4>Menu Output</h4>
        </div>
      
        <div class="menu-show">
           <ul id="menu-ul" class="nav nav-pills" ></ul>
           <div class="p" id="para_menu">
             <button id="save_drag" style="display:none; border:1px dashed" class="btn btn-success"> Save </button>
             <button id="save" style="display:none; border:1px dashed" class="btn btn-success"> Save </button>
             <button id="save_change" style="display:none; border:1px dashed" class="btn btn-success"> Save </button>
             <p id="para3"></p>
           </div>
       </div>      
    </div>
     <!-- Menu Output Box End -->
   </div>
 </div>
</div>
<!-- End Container -->

 </body>
</html>