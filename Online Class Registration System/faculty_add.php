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
			$mobile_no = $_POST['username'];
			$pwd = $_POST['password'];

			

				
					$sql1 = "INSERT INTO faculty(name,Dept_ID,mobile_no,password) VALUES('$name','$dept_id','$mobile_no' , '$pwd')";
					if($conn->query($sql1)== TRUE )
					{
						
						$_SESSION['message'] = "Record have been Saved";
                		$_SESSION['msg_type'] = "success";
						header("location:new_faculty.php");
					}

					else{
						$_SESSION['message'] = "Enter the Required fields";
                		$_SESSION['msg_type'] = "";
						header("location:new_faculty.php");
					}


						

	
}


?>
