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


<?php include 'connect.php'

?>




<script>


$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});





</script>




<body>

<?php
      
      include 'faculty_nav.php';


      ?>
<br>

<div class="w3-panel">
   <h1 class="ml15"> <b><center><i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>

  FACULTY DASHBOARD  
</h1>
  </div>


 




<div class="w3-content w3-display-container">
  <img class="mySlides w3-animate-fading" src="images/t1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/t2.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/t4.jpg" style="width:100%">
 

  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 10000);    
}
</script>


<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  
  
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>

	


  <div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
        <div class="modal-header">            
          <h4 class="modal-title">Add Content</h4>
          <button type="button" name="B" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">


<div class="form-group">
  <?php

 

  echo "Hello , &nbsp;".$_SESSION['user1'];
  ?>


</div>

        <form action="fadd.php"  method="post" enctype="multipart/form-data"> 

            <!--dept -->
                 
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
    
         <!--subject -->


          <div class="form-group">
          <label>Subject Name</label>
        
                  <select class="form-control" name="sub_name" >
                     <option value="">Select The Subject</option>
                    <?php
        
          echo $sql0="SELECT * from dept";
          foreach ($conn->query($sql0) as $row) {
          
          ?>  


                  <option value="<?php echo $row['sID']; ?>"><?php echo $row['Subject']; ?></option>
              <?php } ?>
              </select>
          </div>  
       

            <!--sem --> 


          <div class="form-group">
            <label>Semester</label>
            <br>
            
                  <select class="form-control" name="sem" required>
                  <option value="">Select The Semester</option>
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
          
         
              <!--title -->
          <div class="form-group">
            <label>Title</label>
            <input type="text"  name="title" value="" class="form-control" placeholder='Enter the Title'>
          </div>

                  <!--content -->
          <div class="form-group">
            <label>Content</label>
            <br>
            <textarea id="editor" rows="3" cols="50" name="con" style="resize"; ></textarea>
          </div>
          <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
         </script>
        </div>


                 <!--file -->
             
             <div class="form-group">
               <div class="custom-file">
              <input type="file" class="custom-file-input" class="form-control" name="content" >
             <label class="custom-file-label" for="customFile"><b>Choose file (Less than 2 MB )</b></label>
             </div>
             </div>

             <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
           var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
          });
          </script>

          <br>
          


        <div class="form-group">

          <input type="hidden" class="btn btn-default" name="id" value="<?php echo $_SESSION['user']?>">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="form-control" name="add" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>



<!--add video-->


  <div id="addvid" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
        <div class="modal-header">            
          <h4 class="modal-title">Add Video</h4>
          <button type="button" name="B" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">


<div class="form-group">
  <?php

 

  echo "Hello , &nbsp;".$_SESSION['user1'];
  ?>


</div>

        <form action="add_vid.php"  method="post" enctype="multipart/form-data"> 

            <!--dept -->
                 
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
    
         <!--subject -->


          <div class="form-group">
          <label>Subject Name</label>
        
                  <select class="form-control" name="sub_name" >
                     <option value="">Select The Subject</option>
                    <?php
        
          echo $sql0="SELECT * from dept";
          foreach ($conn->query($sql0) as $row) {
          
          ?>  


                  <option value="<?php echo $row['sID']; ?>"><?php echo $row['Subject']; ?></option>
              <?php } ?>
              </select>
          </div>  
       

            <!--sem --> 


          <div class="form-group">
            <label>Semester</label>
            <br>
            
                  <select class="form-control" name="sem" required>
                  <option value="">Select The Semester</option>
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
          
         
              <!--title -->
          <div class="form-group">
            <label>Title</label>
            <input type="text"  name="title" value="" class="form-control" placeholder='Enter the Title'>
          </div>

    

        <div class="form-group">
        <label for="homepage">Video Link</label>
        <input type="url" class="form-control" id="link" name="link" placeholder="Paste your video link here">
      </div>
          
          


        <div class="form-group">

          <input type="hidden" class="btn btn-default" name="id" value="<?php echo $_SESSION['user']?>">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="form-control" name="add" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>


</body>
</html>
