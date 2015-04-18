<?php
if(isset($_REQUEST['firstname'])){
	
  $firstname= $_REQUEST['firstname'];
  $lastname= $_REQUEST['lastname'];
  $email=$_REQUEST['email'];
  $mobile=$_REQUEST['cell'];
  $date=microtime(date('Y-m-d H:i:s')); 
  $port='BLUESKY';
  
  $db=mysql_connect("mysql2.domains4less.net.nz:3306","bluesky","DemoBlue123!");
  mysql_select_db("blueskydemo",$db);
  
  $que=mysql_query("SELECT * FROM `wp_cf7dbplugin_submits` WHERE `field_value`='$cell'");
  
  if(mysql_num_rows($que)>0){
	  
	echo "<h3 style=' bottom: 32px;color: #2BADF8;float: left;font-size: 15px;font-weight: bold;left:20px;position: relative;text-align: left;top: 20px;'> This cellphone number is in the draw! </h3>";
	
  }else{
  
	mysql_query("INSERT INTO `wp_cf7dbplugin_submits`(`submit_time`,`form_name`, `field_name`, `field_value`, `field_order`) VALUES ('$date','VIP Request Code','firstname','$firstname',0)");
	
	mysql_query("INSERT INTO `wp_cf7dbplugin_submits`(`submit_time`,`form_name`, `field_name`, `field_value`, `field_order`) VALUES ('$date','VIP Request Code','lastname','$lastname',1)");
	
	mysql_query("INSERT INTO `wp_cf7dbplugin_submits`(`submit_time`,`form_name`, `field_name`, `field_value`, `field_order`) VALUES ('$date','VIP Request Code','email','$email',2)");
	
	mysql_query("INSERT INTO `wp_cf7dbplugin_submits`(`submit_time`,`form_name`, `field_name`, `field_value`, `field_order`) VALUES ('$date','VIP Request Code','mobile','$mobile',3)");
	
	mysql_query("INSERT INTO `wp_cf7dbplugin_submits`(`submit_time`,`form_name`, `field_name`, `field_value`, `field_order`) VALUES ('$date','VIP Request Code','Port','$port',4)");
	echo "<p class='bg-success'>You have been successfully entered into the draw, best of luck!</p>";
  }
  
}else{
?>
<script type="text/javascript"> 
			 
function abc(){

  var nam=$("#nam1").val();
  var cell=$("#cell").val();
  
  if(nam.length<1){
	  
	$("#mie").html('<p class="bg-danger">Please enter your name</p>');
   
  }else if(cell.length<6){
	  
	$("#mie").html('<p class="bg-danger">Please enter your cellphone number</p>'); 
  
  }else if(!$.isNumeric(cell)){
	  
	$("#mie").html('<p class="bg-danger">Please enter valid cellphone number</p>'); 
	
  }else{
	  
	var firstname = $("#nam1").val();
	var lastname = $("#nam2").val();
	var email = $("#email").val();
	var cell= $("#cell").val();
	var port= $("#port").val();
	
	//alert('hello');
	$.post('http://tourismhq.com/bluesky/wp-content/themes/bluesky/vip.php', {firstname :firstname,lastname :lastname,email:email, cell :cell,port :port},
	function(data){
	  //alert(data);
	  $("#mie").html(data);
	  return false;
	});
	return false; 
  }
}
</script>

<div class="modal fade" id="vip-code-request" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">VIP Code Request</h4>
      </div>
      <div class="modal-body" style="text-align:center;">
      
      	  <div id="mie"></div>
      
          <p>Enter your details below to be in the draw for a &#8216;VIP Pre-Sales Code&#8217;</p>
          
          <form action="" id="hhh" method="post" class="form-horizontal" role="form">
            <div class="form-group">
              <label for="nam" class="col-sm-3 control-label">First Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nam1" name="nam1" placeholder="First Name" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="nam" class="col-sm-3 control-label">Last Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nam2" name="nam2" placeholder="Last Name" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-3 control-label">Email Address:</label>
              <div class="col-sm-9">
                <input type="email" name="email" id="email" value="" placeholder="Email Address" class="form-control" />
              </div>
            </div>
            
            <div class="form-group">
              <label for="cell" class="col-sm-3 control-label">Mobile:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="cell" name="cell" placeholder="Mobile" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-primary" onclick="abc()">Submit</button>
              </div>
            </div>
          </form>          
      </div>
    </div>
  </div>
</div>
<?php
}
?>