<!DOCTYPE html>
<html lang="en">

  <head>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
<link rel="stylesheet" href="css/dept.css">


<body>


 <?php 
  

  include 'admin_nav.php';

  ?>






  <?php 
  session_start();
       
        require_once'connect.php';

    //require_once'dept_add.php';
    

    // $sql="SELECT * from dept";
    //$res = $conn->query($sql);
    


    function pre_r($array)
    {
      echo "<pre>";
      print_r($array);
      echo "</pre>";
    }

    


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




  <div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h1>Manage<b> Departments</b></h1>
          </div>
          <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Department</span></a>
                    
          </div>
        </div>
      </div>




      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
              
            </th>
             <th><h4>Sl. No</h4></th>
            <th><h4>Department Name</h4></th>
            <th><h4>Actions</h4></th>
          </tr>
        </thead>

        <?php
        $sql="SELECT * from department";
        $i=1;
        foreach ($conn->query($sql) as $row) {
        ?>            
        
          <tr>
            <td>
              
            </td>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['Department_Name'] ?></td>
            
            
            <td>
              <a href="#updateEmployeeModal-<?php echo $row['Dept_ID'] ?>" class="edit"  name='edit'   data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal-<?php echo $row['Dept_ID'] ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>






<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal-<?php echo $row['Dept_ID'] ?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="d_s.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">            
          <h4 class="modal-title">Delete Record</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="hidden" class="btn btn-default" name="id" value="<?php echo $row['Dept_ID'] ?>">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" name="delete" value="Delete">

        </div>
      </form>
    </div>
  </div>
</div>
        
      




<!-- Edit Modal HTML -->
<div id="updateEmployeeModal-<?php echo $row['Dept_ID'] ?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
        <div class="modal-header">            
          <h4 class="modal-title">Edit Department</h4>

          <?php $sql1 = $conn->prepare("SELECT * FROM department WHERE Dept_ID='$row[Dept_ID]'");
          $sql1->execute(); $rs=$sql1->fetch();
          // $result = $conn->query($sql1);
     //           $rs = $result->fetch_array();
                 ?>
        </div>
        <div class="modal-body">

      <form action="d_s.php"  method="post" enctype="multipart/form-data">         
          <div class="form-group">
            <label>Department Name</label>
            <input type="text"  name="dept_name" class="form-control" value="<?php echo $rs['Department_Name']; ?>" placeholder='Enter the Department Name'>
          </div>
         
        <div class="form-group">
          <input type="hidden" class="btn btn-default" name="id" value="<?php echo $row['Dept_ID'] ?>">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="form-control" name="update" value="Update">
        </div>
      </form>
    </div>
  </div>
</div>
  <?php } ?>  <!-- end of while loop -->  
        
      
</table>








      <div class="clearfix">
        <div class="hint-text">Showing <b>1</b> out of <b>100</b> entries</div>
        <ul class="pagination">
          <li class="page-item disabled"><a href="#">Previous</a></li>
          <li class="page-item active"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
      </div>
    </div>
  </div>        
</div>





<!-- ADD Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
        <div class="modal-header">            
          <h4 class="modal-title">Add Department</h4>
          <button type="button" name="B" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">

      <form action="d_s.php"  method="post" enctype="multipart/form-data">         
          <div class="form-group">
            <label>Department Name</label>
            <input type="text"  name="dept_name" class="form-control" placeholder='Enter the Department Name'>
          </div>
          
        <div class="form-group">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="form-control" name="add" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>












</div>



</body>
</html>
