<!DOCTYPE html>
<?php 


session_start(); ?>



<html>
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/student.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">


<body >
	<div class="">
  <div class="w3-row w3-large w3-black">
    <div class="w3-col s4">
      <a href="student_dash.php" class="w3-button w3-block"> <i class="fas fa-home"></i>   Home</a>
    </div>
    <div class="w3-col s4">
      <a href="vsub.php" class="w3-button w3-block"  data-toggle="modal"><i class="fas fa-eye" aria-hidden="true"></i>
        View Subjects</a>
    </div>
  <div class="w3-col s3">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <div class="w3-dropdown-hover">
      <a href="" class="w3-button w3-black"  data-toggle="modal"><i class="fas fa-eye" aria-hidden="true"></i>
        View  </a>
      <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border" style="width:250px">
      <a href="vcon.php" class="w3-bar-item w3-button"> <i class="fas fa-file-alt"></i>  View Contents</a>
      <a href="vvid.php" class="w3-bar-item w3-button"> <i class="fab fa-youtube"></i>  View Videos</a>
      
    </div>
    </div>
  </div>

    <br>
    <br>
    <br>




    <br>
	<center><font color="yellow"><h1><i class="fas fa-laugh-wink" aria-hidden="true"></i>   Hey , <?php echo $_SESSION['user2']; ?> </h1></font></center>
    <br>

    <center><font color="#0CD4C3"><h3>Please select the semester and department to view the subjects from each semseter</h3></font></center>
        <br>
        <form action="sub.php" method="post">
        <div class="select" align="center">
            <select class="" name="sem" required>
                  <option value="">Select The Semester</option>
                  <option value="First">First</option>
              <option value="Second">Second</option>
              <option value="Third">Third</option>
              <option value="Fourth">Fourth</option>
              <option value="Fifth">Fifth</option>
              <option value="Sixth">Sixth</option>
              <option value="Seventh">Seventh</option>
              <option value="Eight">Eight</option>
              </select>
        <br>
        <br>


          <select class="" name="dept_name" >
                     <option value="">Select The Department</option>
                    <?php
          include 'connect.php';
          echo $sql0="SELECT * from department";
          foreach ($conn->query($sql0) as $row) {
          
          ?>  


                  <option value="<?php echo $row['Dept_ID']; ?>"><?php echo $row['Department_Name']; ?></option>
              <?php } ?>
              </select>

</div>

<br>
    		<center><input type="submit" class="btn btn-primary" name ='Submit' value="Submit" class="button" size="20"/></center>
    
  
    	<br>
        </form>



    
</body>
</html>