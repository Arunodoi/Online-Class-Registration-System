<!DOCTYPE html>
<html lang="en">

  <head>
  <script src="https://kit.fontawesome.com/a076d05399.js"
  ></script>
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
<link rel="stylesheet" href="css/student.css">


<body>


 
  







  <?php 
  session_start();
       
        require_once'connect.php';
        include 'admin_nav.php';

  ?>






  <?php 
  if(isset($_SESSION['message'])): ?>
    <div class="container-xl">
    <div class="alert alert-<?=$_SESSION['msg_type']?>">

      <?php

        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </div>
    </div>
    <?php endif ?>




 


    <br>
  <center><font color="Yellow"><h1><i class="fas fa-laugh-wink" aria-hidden="true"></i>  Hey , Admin </h1></font></center>
    <br>

    <center><font color="#0CD4C3"><h3>Please select the Semester and Department to view the students enrolled</h3></font></center>
        <br>
        <form action="vstud1.php" method="post">
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
              </select></div>
        <br>


          <div class="select" align="center">
            <select class="" name="dep" required>
                  <option value="">Select The Department</option>

                      <?php
        
                      echo $sql0="SELECT * from department";
                      foreach ($conn->query($sql0) as $row) {
          
                      ?>  


                  <option value="<?php echo $row['Dept_ID']; ?>"><?php echo $row['Department_Name']; ?></option>

                  <?php } ?>
            
              </select></div>
              <br>

        <center><input type="submit" class="btn btn-primary" name ='Submit' value="Submit" class="button" size="20"/></center>
    
  
      <br>
        </form>







</div>



</body>
</html>
