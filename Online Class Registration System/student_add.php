<?php
session_start();

	include 'connect.php';
	
			$name ='' ;
			$dept_id = '';
			$mobile_no = '';
			$pwd ='';


	if(isset($_POST['submit']))
	{

		
  			echo "You did not fill out the required fields.";


			$name = $_POST['name'];
			$dept_id = $_POST['dept_name'];
			$sem = $_POST['sem'];
			$mobile_no = $_POST['username'];
			$pwd = $_POST['password'];

			

				
					$sql1 ="INSERT INTO student(sname,Dept_ID,sem,smob,spass) VALUES('$name','$dept_id','$sem','$mobile_no','$pwd')";
					if($conn->query($sql1)== TRUE )
					{
						
						$_SESSION['message'] = "Record have been Saved";
                		$_SESSION['msg_type'] = "success";
						header("location:new_student.php");
					}

					else{
						$_SESSION['message'] = "Enter the Required fields";
                		$_SESSION['msg_type'] = "warning";
						header("location:new_student.php");
					}


						

	
}


?>
