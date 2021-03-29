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
<link rel="stylesheet" href="css/but.css">
</head>


<?php include 'connect.php'

?>






    










<div class="container">




  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
  


  <br>


  <div class="form-group" >
  <?php

 

  echo "Hello , &nbsp;".$_SESSION['user1'];
  ?>


</div>


<?php

include 'connect.php'; 

 
          
            $id = $_GET['edit'];
                  
     
                      
                     $sql1 =  $conn->prepare("SELECT dept.Subject , content.* FROM content INNER JOIN dept ON content.sID=dept.sID WHERE c_id = $id ");
                     $sql = $conn->prepare("SELECT department.Department_Name , content.* FROM content INNER JOIN department ON content.Dept_ID=department.Dept_ID WHERE c_id = $id ");
                     $res = $sql->execute();
                      $res1 = $sql1->execute();
                     $rs=$sql->fetch();
                     $rs1=$sql1->fetch();
                      
              
    
?>



  <h2>Update Content</h2>
  <form action="conedit_s.php" method="POST" >
     


        

  <div class="form-row">
       <div class="form-group col-6">
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

      

  
  
       <div class="form-group col-6">
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

  </div>

        
                 <!--title -->
          <div class="form-group">
            <label>Title</label>
            <input type="text"  name="title" value="<?php echo $rs['title']; 
                          ?>" class="form-control" placeholder='Enter the Title'>
          </div>

    

                  <!--content -->
          <div class="form-group">
            <label>Content</label>
            <br>
            <textarea id="editor" rows="3" cols="50" name="con"  ><?php  echo $rs['con']; ?></textarea>
          </div>
          <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
         </script>
        </div>


           
          
          
      

        <div class="form-group">
          <input type="hidden" class="btn btn-default" name="id3" value="<?php echo $rs['c_id']?>">
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