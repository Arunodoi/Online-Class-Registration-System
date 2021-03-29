<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

	<head>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
 


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Faculty</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/admin.css">
<script src="ckeditor5-build-classic/ckeditor.js"></script>
<link rel="stylesheet" href="css/boot_support.css">

</head>


<?php include 'connect.php'

?>






    








<br>

<div class="container">




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
                    <br>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/u.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    


  <br>


  <div class="form-group">
  <?php

 

  echo "Hello , &nbsp;".$_SESSION['user1'];
  ?>


</div>


<?php

include 'connect.php'; 

 
          
            $id = $_GET['edit'];
                  
     
                      
                     $sql1 =  $conn->prepare("SELECT dept.Subject , videos.* FROM videos INNER JOIN dept ON videos.sID=dept.sID WHERE vid = $id ");
                     $sql = $conn->prepare("SELECT department.Department_Name , videos.* FROM videos INNER JOIN department ON videos.Dept_ID=department.Dept_ID WHERE vid = $id ");
                     $res = $sql->execute();
                      $res1 = $sql1->execute();
                     $rs=$sql->fetch();
                     $rs1=$sql1->fetch();
                      
              
    
?>



  <h2>Update Videos</h2>
  <form action="videdit_s.php" method="POST">
       <div class="form-group">


          <label>Department Name</label>
        
                  <select class="form-control" name="dept_name" >



                     <option value="<?php echo $rs['Dept_ID']; 
                          ?>"><?php echo $rs['Department_Name']; 
                          ?></option>
                    <?php
        
          echo $sql0="SELECT * from department";
          foreach ($conn->query($sql0) as $row) {
          
          ?>  


                  <option value="<?php echo $row['Dept_ID']; ?>"><?php echo $row['Department_Name']; ?></option>
              <?php } ?>
              </select>
          </div>



  
          <div class="form-group">
          <label>Subject Name</label>
        
                  <select class="form-control" name="sub_name" >
                     <option value="<?php echo $rs1['sID']; 
                          ?>"><?php echo $rs1['Subject']; 
                          ?></option>
                    <?php
        
          echo $sql0="SELECT * from dept";
          foreach ($conn->query($sql0) as $row) {
          
          ?>  


                  <option value="<?php echo $row['sID']; ?>"><?php echo $row['Subject']; ?></option>
              <?php } ?>
              </select>
          </div>  



                 <!--title -->
          <div class="form-group">
            <label>Title</label>
            <input type="text"  name="title" value="<?php echo $rs['title']; 
                          ?>" class="form-control" placeholder='Enter the Title'>
          </div>

    

        <div class="form-group">
        <label for="homepage">Video Link</label>
        <input type="url" class="form-control" id="link" name="link"   value="<?php echo $rs['link']; 
                          ?>"  placeholder="Paste your video link here">
      </div>
          
          
      <br>

        <div class="form-group">

          <input type="hidden" class="btn btn-default" name="id3" value="<?php echo $rs['vid']?>">
          <input type="submit" class="form-control" name="update" value="Update">
        </div>

         </form>


  


</div>
</div>
</div>
</div>
</div>
</div>




   

</body>
</html>