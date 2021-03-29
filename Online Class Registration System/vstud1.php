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
<link rel="stylesheet" href="">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

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
 <br>



  <div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
           <h1 class="ml10">
  <span class="text-wrapper">
    <span class="letters">Students </span>
  </span>
</h1>
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div>




  <table class="table table-striped">
  <thead class="thead-dark">
          <tr>
            
         
            <th><h4>Student Name</h4></th>
             <th><h4>Mobile no.</h4></th>
              <th><h4>Department</h4></th>
               <th><h4>Semester</h4></th>
                <th><h4>Action</h4></th>
              
              
            
  
         </tr>
  </thead>


<?php

     

      include 'connect.php';

      if(isset($_POST['Submit']))
      {

      $sem = $_POST['sem'];
      $did = $_POST['dep'];

     
      $sql1 = "SELECT * FROM department WHERE  Dept_ID = '$did' ";
      $sql = "SELECT * FROM student WHERE sem='$sem' && Dept_ID = '$did' ";
      $res =$conn->query($sql);
      $res1 =$conn->query($sql1);

      if($res && $res1==TRUE)
      {
        
        foreach($res1 as $r) {
        foreach ($res as $row) {
          
        
 ?>




  <tr>

      
      <td><?php echo $row['sname']; ?> </td>
       <td><?php echo $row['smob']; ?> </td>

       




        <td><?php echo $r['Department_Name']; ?> </td>
         <td><?php echo $row['sem']; ?> </td>
        
     

      <td>
              <a href="#mymodal-<?php echo $row['sid'] ?>" class="edit"  name='edit'   data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> </td>

    </tr>

  

 <!-- Modal -->
  <div class="modal fade" id="mymodal-<?php echo $row['sid'] ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
                       
          <h4 class="modal-title">Edit Student Details</h4>
        </div>
        <div class="modal-body">
         
            <form action="vstud1add.php"  method="post" enctype="multipart/form-data">         
          <div class="form-group">


            <?php 
                $sql = "SELECT * from student WHERE sid = '$row[sid]'";
                $result = $conn->query($sql);
                if($result==TRUE)
                {
                  foreach($result as $rg) 
                ?>
            <label>Student Name</label>
            <input type="text"  name="sname" value="<?php echo $rg['sname'] ?>" class="form-control" placeholder='Enter the Subject Name'>
           
          </div>

            <div class="form-group">
          <label>Mobile No.</label>
            <input type="text"  name="smob" value="<?php echo $rg['smob'] ?>" class="form-control" placeholder='Enter the Subject Name'>
          </div>

 





          <div class="form-group">
            <label>Semester</label>
            <br>
            
              <select class="form-control" name="sem" required>
              <option value="<?php echo $rg['sem'] ?>"><?php echo $rg['sem'] ?></option>
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
          <label>Department</label>





          




                  <select class="form-control" name="dept_name">



            <?php 
              $sql = "SELECT department.Department_Name,student.* FROM department INNER JOIN student ON department.Dept_ID=student.Dept_ID WHERE sid = '$row[sid]'";
                $result = $conn->query($sql);

                if($result==TRUE)
               {
                foreach($result as $s){
               ?>


                  <option value="<?php echo $s['Dept_ID']; ?>"><?php  echo $s['Department_Name']; }}  ?></option>



                          <?php

                         $sql = "SELECT * from department";
                          $result = $conn->query($sql);

                          if($result==TRUE)
                        {
                            foreach($result as $i){
                        ?>


                  <option value="<?php echo $i['Dept_ID']; ?>"><?php  echo $i['Department_Name']; }} ?></option>

             



              </select>
          </div>

       <?php }  ?>  


                  
        </div>
        <div class="form-group">

    

   

          <input type="text" class="btn btn-default" name="id2" value="<?php echo $row['sid'];  ?>">

          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="form-control" name="update" value="Update">
        </div>
      </form>

   <?php  } } } } ?>


      
      </div>
      
    </div>
  </div>
  

 
  </table>











</div>












</body>
</html>
