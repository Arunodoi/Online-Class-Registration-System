<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<head>	
	<script>
function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</head>
<style>
	font-family: 'Roboto', sans-serif;
</style>

<body>
<div class="w3-top ">
	  
  <div class="w3-bar w3-black">
    <div class="w3-bar-item w3-button w3-mobile">
      <a href="index.php" class="w3-button w3-block "> <i class="fas fa-home"></i>   Home</a>
    </div>
    <div class="w3-bar-item w3-button w3-mobile">
      <a href="admin_login.php" class="w3-button w3-block  "><i class="fas fa-user-cog" aria-hidden="true"></i>
        Admin Login</a>
    </div>
    <div class="w3-bar-item w3-button w3-mobile ">
      <a href="faculty_login.php" class="w3-button w3-block"> <i class="fas fa-chalkboard-teacher"></i>   Faculty Login</a>
    </div>
    <div class="w3-bar-item w3-button w3-mobile ">
      <a href="student_login.php" class="w3-button w3-block  "><i class="fas fa-user-graduate" aria-hidden="true"></i>  Student Login</a>
    </div>
  	
 </div>


  </div>
</div>







</body>
</html>