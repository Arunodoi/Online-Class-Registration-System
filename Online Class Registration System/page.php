<?php
date_default_timezone_set('Asia/Calcutta');
ob_start(); 
session_start();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

if(isset($_SESSION["u_id"])){
	

ob_end_flush()	;	
?>
<!DOCTYPE HTML>
<html>
<head>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/custom.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="-1">
<meta name="robots" content="none">
<meta name="googlebot" content="noarchive">
<meta http-equiv="pragma" content="no-cache">
<script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="cke/ckeditor.js"></script>
</head>
<body>
   <div class="banner">
   	<div class="container text-center"><img src="img/prism-infosys.png"></div>
   </div>   
<div class="btn-inverse">
          
          <div class="">
         <?php 
		 	//include("inc/link.php");
		 ?>


    </div></div>
   
   
   
   
 <div class="container-fluid" style="min-height:400px;">
 <div style="margin:5px 0px">

<?php
if (isset($_GET['pg'])){
include("inc/" . $_GET['pg'] . '.php');
}
else
{
include("inc/home.php");
}
?>
		
		
         
	</div>
      
</div>
<div class="footer">


<div class="container">

       
          <a href="#">Copyright &copy; <?php echo date("Y");   ?>. All Rights Reserved</a>

        </div>


</div>

<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
    <script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

jQuery(document).ready(function(){
			jQuery("#formID").validationEngine();

			$("#formID").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) });
			
		});

</script>

</body>
</html> 
<?php
}
?>