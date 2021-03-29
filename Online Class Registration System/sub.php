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




<?php

        include 'stud_nav.php';
        ?>

    
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
    <span class="letters">Subjects </span>
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
            
            <th><h4>Sl no.</h4></th>
            <th><h4>Subject Name</h4></th>
            
	
	       </tr>
  </thead>

        
	<?php

			$i =1;

			include 'connect.php';

			if(isset($_POST['Submit']))
			{

			$sem = $_POST['sem'];
			$did = $_POST['dept_name'];

			

			$sql = "SELECT * FROM dept WHERE Semester='$sem' && Dept_ID = '$did'";
			$res =$conn->query($sql);

			if($res==TRUE)
			{
			  foreach ($res as $row) {
					
				
			?>



        <tr>
        	<td><?php echo $i++ ?></td>
        	<td><?php echo $row['Subject']; ?></td>

        		<?php } } } ?>
        	</tr>

    </table>





</body>
</html>