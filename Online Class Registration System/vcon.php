<!DOCTYPE html>
<?php 


session_start();
include 'connect.php';

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




    <br>
  <center><font color="yellow"><h1><i class="fas fa-laugh-wink" aria-hidden="true"></i>   Hey , <?php echo $_SESSION['user2']; ?> </h1></font></center>
    <br>

    <center><font color="#0CD4C3"><h3>Please select the subject to view the contents</h3></font></center>
      
        <br>
        <form action="consub.php" method="post">
        <div class="select" align="center">
            <select class="" name="sub" required>
                  <option value="">Select The Subject</option>

                      <?php
        
                      echo $sql0="SELECT * from dept";
                      foreach ($conn->query($sql0) as $row) {
          
                      ?>  


                  <option value="<?php echo $row['sID']; ?>"><?php echo $row['Subject']; ?></option>

                  <?php } ?>
            
              </select></div>
        <br>

        <center><input type="submit" class="btn btn-primary" name ='Submit' value="Submit" class="button" size="20"/></center>
    
  
      <br>
        </form>



    
</body>
</html>