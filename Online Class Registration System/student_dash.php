<!DOCTYPE html>
<?php 


session_start();


 ?>

<html>
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/student.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">


<body bgcolor="black">

    <?php

        include 'stud_nav.php';
        ?>
	
    <br>
    <br>
    <br>

<div class="w3-panel">
   <h1 class="ml15"> <b><center><i class="fas fa-user-graduate" aria-hidden="true"></i>

  STUDENT DASHBOARD  
</h1>
  </div>

    
</div>


    <br>
	<center><font color="yellow"><h1><i class="fas fa-laugh-wink" aria-hidden="true"></i>   Welcome , <?php echo $_SESSION['user2']; ?> </h1></font></center>
    <br>

  

<div class="w3-content w3-display-container">
  <img class="mySlides w3-animate-fading" src="images/s0.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/s1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/s2.jpg" style="width:100%"> 
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




    
</body>
</html>