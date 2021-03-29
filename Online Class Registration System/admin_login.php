<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/admin_login_support.css">

<body bgcolor="black">
<div class="container">



<?php 


session_start(); ?>

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
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <br><img src="images/admin.png" class="image" > </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    


  <br>

  <b><h2><font color="#1E90FF">Adminstrator Login</h2></font></b>
  <form action="" method="POST"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter your Username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>

     <div class="form-group">
                        
    <button class="btn btn-primary btn-lg" name="B">Login</button>



  </form>
</div>
    

<?php
include "connect.php";


         if (isset($_POST['B'])) {

                       

                        $username=$_POST['username'];
                        $password=$_POST['password'];
                                               
                            
                            $sql = $conn->prepare("SELECT * from admin where username='$username' and password='$password'");


                            $sql->execute();
                            
                            $sql1 = "SELECT * from admin where username='$username' and password='$password'";
                            
                            $row=$sql->rowCount();
                            
                            
                            if($row==1)
                            {

                              
                                foreach ($conn->query($sql1) as $row)
                                 {

                                session_regenerate_id();
                                $_SESSION['user'] = $row['username']; 
                              
                                session_write_close();

                                 }
                            
                            header('location:admin_home.php');

                            }

                       

                          else 
                            {

                            $_SESSION['message'] = "Invalid username and password";
                            $_SESSION['msg_type'] = "danger";
                            header("location:admin_login.php");
                           
                            }

                        } 

                       
                          


?>





</body>
</html>

