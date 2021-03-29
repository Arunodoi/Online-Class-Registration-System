<!DOCTYPE html>

<html>
<head>
	 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	 <script type="text/javascript">
	 	
	 	// Wrap every letter in a span
    var textWrapper = document.querySelector('.ml10 .letters');
	textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

	anime.timeline({loop: true})
  	.add({
    targets: '.ml10 .letter',
    rotateY: [-90, 0],
    duration: 1300,
    delay: (el, i) => 45 * i
 	 }).add({
    targets: '.ml10',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
 	 });


	 </script>
</head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/sub.css">


<body>






<div class="">
  <div class="w3-row w3-large w3-black">
    <div class="w3-col s4">
      <a href="student_dash.php" class="w3-button w3-block"> <i class="fas fa-home"></i>   Home</a>
    </div>
    <div class="w3-col s4">
      <a href="vsub.php" class="w3-button w3-block"  data-toggle="modal"><i class="fas fa-eye" aria-hidden="true"></i>
        View Subjects</a>
    </div>

      <div class="w3-col s3">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <div class="w3-dropdown-hover">
      <a href="" class="w3-button w3-black"  data-toggle="modal"><i class="fas fa-eye" aria-hidden="true"></i>
        View  </a>
      <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border" style="width:250px">
      <a href="vcon.php" class="w3-bar-item w3-button"> <i class="fas fa-file-alt"></i>  View Contents</a>
      <a href="vvid.php" class="w3-bar-item w3-button"> <i class="fab fa-youtube"></i>  View Videos</a>
      
    </div>
    </div>
  </div>

    
</div>
    

  </div>




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
    <span class="letters">Contents</span>
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
            
            <th><h4>Sl. No</h4></th>
            <th><h4>Title</h4></th>
            <th><h4>Content</h4></th>
            <th><h4>File</h4></th>
           
            
	
	       </tr>
  </thead>

        
	<?php

			$i =1;

			include 'connect.php';

			if(isset($_POST['Submit']))
			{

			$sid = $_POST['sub'];

			

			$sql = "SELECT * FROM content WHERE sID='$sid'";
			$res =$conn->query($sql);

			if($res==TRUE)
			{
			  foreach ($res as $row) {
					
				
			?>



        <tr>
        	<td><?php echo $i++ ?></td>
        	<td><?php echo $row['title']; ?></td>
          <td><?php echo $row['con']; ?></td>
          <td><a href="content/<?php echo $row['file'] ?>">Click Here to View the File</td>
         

        		<?php } } } ?>
        	</tr>

    </table>





</body>
</html>