<?php
session_start();

	include 'connect.php';
	
			



	if(isset($_POST['add']))
	{

			
			$fid = $_POST['id'];
			$did = $_POST['dept_name'];
			$sid = $_POST['sub_name'];
			$sem = $_POST['sem'];
			$title = $_POST['title'];
			$link = $_POST['link'];
		    
		    
		    

			

					echo $q = "INSERT INTO videos(faculty_ID,Dept_ID,sID,sem,title,link) VALUES('$fid','$did','$sid','$sem','$title','$link')";
					$sql = $conn->prepare($q);
				 	if($sql->execute() == TRUE )
				 	{

						echo "hi";

				 		$_SESSION['message'] = "Records are saved";
                		$_SESSION['msg_type'] = "success";
                		header("location:faculty_dash.php");
						
				 	}

				 else{
				 		$_SESSION['message'] = "Enter the Required fields";
                		$_SESSION['msg_type'] = "warning";
                		header("location:faculty_dash.php");
					
				 	}


						

	
}


?>
