<?php 
require_once "../includes/config.php";
require_once 'function.php';
if($_SESSION['username']!="admin"){
	header("Location:".HOST);
}

$topicData = getTopicsDropDown();
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Situation Room | Alerts | Admin </title>
 	<link rel="icon" type="image/ico" href="http://www.ewn.com.au/favicon.ico" />
   <link rel="shortcut icon" type="image/ico" href="http://www.ewn.com.au/favicon.ico" />
	<link href="../css/bootstrap3.min.css?v=<?php echo FILE_VERSION; ?>" rel="stylesheet">
	<link href="../css/font-awesome.min.css?v=<?php echo FILE_VERSION; ?>" rel="stylesheet">
	<link rel="stylesheet" href="dt/dataTables.bootstrap.min.css">
 </head>
 <body>
 
 <div class="container">
 	<div class="row">
 	   <h4 class="lead">EWN Alerts Manager</h4>
 	   <hr>
 		<div class="col-md-12">
 			<table id="ewn_alerts" class="table  table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Topic</th>
                <th>Subject</th>
                <th>Created Date</th>
                <th>Expire Date</th>
                <th>Actions</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>id</th>
                <th>Topic</th>
                <th>Subject</th>
                <th>Created Date</th>
                <th>Expire Date</th>
                 <th>Action</th>
            </tr>
        </tfoot>
        <tbody></tbody>
    </table>
 		</div>
 	</div>
 </div>	
 </body>
    <script type="text/javascript" src="../js/jquery-1.7.2.js?v=<?php echo FILE_VERSION; ?>"></script>
     <script src="../js/libs/bootstrap.min.js?v=<?php echo FILE_VERSION; ?>"></script>
     <script src="dt/jquery.dataTables.min.js"></script>
     <script src="dt/dataTables.bootstrap.min.js"></script>
 </html>
 <!-- modal for  updation -->
 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
       <form method="POST" action="core.php" id="update_alert_form" class="update_alert_form" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Alerts</h4>
      </div>
      <div class="modal-body">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Topic </label>
			    <select name="topic_id" id="topic_id" class="form-control">
			    	<?php echo $topicData; ?>
			    </select>	
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Subject</label>
			    <input type="text" name="subject" id="subject" class="form-control" id="exampleInputPassword1" placeholder="Subject">
			  </div>
      </div>
      <input type="hidden" name="alert_id" id="alert_id" value="">
      <input type="hidden" name="save_changes" value="save_changes">
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="save_changes"  name="save_changes" value="save_changes">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
	</form>
  </div>
</div>
 <?php // page based script ?>
<script>
    var datatable;
	$(document).ready(function() {
		
    datatable = $('#ewn_alerts').DataTable({
              "bPaginate": true,
              "bLengthChange": true,
              "bFilter": true,
              "bSort": true,
              "bInfo": true,
              "bAutoWidth": false,
              "bProcessing": true,
              "bServerSide": true,
              "sAjaxSource": "data/alert.php",
               "oLanguage": {
                     "sLoadingRecords": '<div class="text-center"><span class="fa fa-circle-o-notch fa-spin fa-1x text-primary"></span> Loading</div>',
                     "sProcessing": '<span class="fa fa-circle-o-notch fa-spin fa-1x text-primary"></span> Loading',
                  },
                "aoColumnDefs": [{ "bSortable": false, "aTargets": [ 0 ] }] 
                 
            });
    
    //  to delete the warning 
    
    $(document).on("click",".confirm_delete_alert",function(){
    	if(confirm("Confirm delete this alert")){
    		
    	}
    });
    
    $(document).on("click",'.edit_warning',function(event){
    	  event.preventDefault();
    	  alert_id = $(this).data("id");
    	  $.ajax({
    	  	url: 'core.php?get_alert='+alert_id,
    	  	type: 'GET',
    	  	dataType: 'JSON'
    	  }).done(function(res) {
    	  	$("#alert_id").val(alert_id);
    	  	$("#topic_id").val(res['topic_id']);
			$("#subject").val(res['subject']);
			$("#myModal").modal("show");
    	  	
    	  }).fail(function() {
    	  	 alert("Something Went wrong, please try again");
    	  })
    })
    
    $(document).on("submit","form#update_alert_form",function(event){
    	$("#save_changes").attr("disabled",true).html("Loading....");
    	event.preventDefault();
    	var obj = $(this);
    	$.ajax({
    		url: obj.attr('action'),
    		type: 'POST',
    		dataType: 'JSON',
    		data: obj.serialize(),
    	}).done(function(res) {
   			alert(res.message);
   			$("#save_changes").attr("disabled",false).html("Update")
    			$("#myModal").modal("hide");
    			if(res.status=="true"){
    				 datatable.draw(false);
    			}
    	}).fail(function() {
    		 alert("Something Went wrong, please try again");
    		 $("#myModal").modal("hide");
    		 $("#save_changes").attr("disabled",false).html("Update")
    	});
    })
	});
</script>