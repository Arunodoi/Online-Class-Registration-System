<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/new_support.css">

<body>


<?php
  session_start();
 include 'connect.php'; ?>
<div class="container">

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




  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/s.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    


  

  <h2>New   Student   Registration</h2>
  
  <form action="student_add.php" method="post">

     <div class="form-group">
      <label for="email">Name :</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
   
          <div class="form-group">
          <label>Department Name</label>
        
                  <select class="form-control" name="dept_name" >
                     <option value="">Select The Department</option>
                    <?php
        
          echo $sql0="SELECT * from department";
          foreach ($conn->query($sql0) as $row) {
          
          ?>  


                  <option value="<?php echo $row['Dept_ID']; ?>"><?php echo $row['Department_Name']; ?></option>
              <?php } ?>
              </select>
          </div>


      <div class="form-group">
            <label>Semester</label>
            <br>
            
                  <select class="form-control" name="sem" required>
                  <option value="">Select the Semester</option>
                  <option value="First">First</option>
              <option value="Second">Second</option>
              <option value="Third">Third</option>
              <option value="Fourth">Fourth</option>
              <option value="Fifth">Fifth</option>
              <option value="Sixth">Sixth</option>
              <option value="Seventh">Seventh</option>
              <option value="Eight">Eight</option>
              </select>
          </div>      

    <div class="form-group">
      <label for="email">Mobile No. :</label>
      <input type="text" class="form-control" id="username" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter your Mobile No." name="username" maxlength="10">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
  
    

    <div class="form-group">
    <button name="submit" class="btn btn-primary btn-lg">Register</button>
  </div>

  

 


  </form>

</div>

</body>
</html>
