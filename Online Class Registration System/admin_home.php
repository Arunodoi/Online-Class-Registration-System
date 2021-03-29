<!DOCTYPE html>
<html lang="en">

	<head>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ADMIN</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/admin.css">



<script>






$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});



</script>



<body>

	<?php 
	session_start();

	include 'admin_nav.php';

	?>



<br>

<div class="w3-panel">
   <h1 class="ml15"> <b><center><i class="fas fa-laugh-wink" aria-hidden="true"></i>

  ADMIN DASHBOARD
</h1>
  </div>

 <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  
  <div class="w3-quarter">
    <span class="w3-xxlarge">1000+</span>
    <br><h5>Students</h5>
  </div>
   <div class="w3-quarter">
    <span class="w3-xxlarge">5+</span>
    <br><h5>Departments</h5>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br><h5>Faculties</h5>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">5+</span>
    <br><h5>Years Experience</h5>
  </div>
</div>

<div class="w3-content w3-display-container">
  <img class="mySlides w3-animate-fading" src="images/q.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/a1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/a3.jpg" style="width:100%">
 

  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 10000);    
}
</script>

	<br>
	<br>
	<br>
	<br>
<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  
  
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>
</body>
</html>