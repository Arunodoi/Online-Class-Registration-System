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

</head>



<body>

  <?php
 include 'connect.php';
 include 'admin_nav.php';

?>

 

<br>
<br>
<br>


 <div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h1>Manage<b> Contents</b></h1>
          </div>
          <div class="col-sm-6">
           
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
            <th><h4>Subject</h4></th>
            <th><h4>Title</h4></th>
            <th><h4>Content</h4></th>
            <th><h4>File</h4></th>
            <th><h4>Actions</h4></th>

	
	          </tr>
        </thead>
	
        <?php
        
        $sql="SELECT department.*,content.* from department INNER JOIN content ON   department.Dept_ID=content.Dept_ID";
        $i=1;
        foreach ($conn->query($sql) as $row) {
        $s=$row['sID'];
        $sql1="SELECT * from dept where sID='$s'";
        ?>            
        
          <tr>
            <td>
              
            </td>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['Department_Name'] ?></td>
            
          
            <td><?php foreach ($conn->query($sql1) as $row1) { echo $row1['Subject']; } ?></td>
             <td><?php echo $row['title'] ?></td>
              <td><?php echo $row['con'] ?></td>
              
                <td><a href="<?php echo $row['link'] ?>">Click here to View the Video</a></td>
                  <td><a href="editcon.php?edit=<?php echo $row['c_id']; ?> " class="edit"  name='edit'><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> </td>
          </tr>
         

  
<?php } ?>
     
</table>

 


<!--new-->
  


        




      
    














</body>
</html>