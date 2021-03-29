<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/boot_support.css">

<body>

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

<div class="container">


      
  


  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> </div>
                    <br>
                    <br>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/f.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    


  <br>

  <h2>Faculty Login</h2>
 
    <form action="faculty_login.php" method="post">

    <div class="form-group">
      <label for="email">Mobile No. :</label>
      <input type="text" class="form-control" id="username" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter your Mobile No." name="username" maxlength="10">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>


     <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>


    <button name="B" class="btn btn-primary btn-lg">Login</button>

   <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a href="new_faculty.php" class="text-danger ">Register</a></small> </div>

   



  </form>

</div>


<?php

include 'connect.php';


         if (isset($_POST['B'])) {

                       

                        $username=$_POST['username'];
                        $password=$_POST['password'];
                                               
                            
                            $sql = $conn->prepare("SELECT * from faculty where mobile_no='$username' and password='$password'");

                            $sql->execute();



                          $sql3="SELECT * from faculty where mobile_no='$username' and password='$password' "; 
                       
                         


                            $row=$sql->rowCount();
                            $res = $sql->fetchAll();
                           
                            
                            if($row==1)
                            {

                            session_start();
                            foreach ($conn->query($sql3) as $row) {



                            session_regenerate_id();
                            $_SESSION['user'] = $row['faculty_ID']; 
                            $_SESSION['user1'] = $row['name'];
                            session_write_close();
                             }
                            header('location:faculty_dash.php');
                            //print_r($res['name']);

                            }

                            else 
                            {
                            $_SESSION['message'] = "Invalid username and password";
                            $_SESSION['msg_type'] = "danger";
                            header("location:faculty_login.php");
                            }


                


                }


?>


</body>
</html>
