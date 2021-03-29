<?php
session_start();

	include 'connect.php';
	
			



	if(isset($_POST['add']))
	{

			$target = "content/".basename($_FILES["content"]["name"]);
			$fid = $_POST['id'];
			$did = $_POST['dept_name'];
			$sid = $_POST['sub_name'];
			$sem = $_POST['sem'];
			$title = $_POST['title'];
			$con = $_POST['con'];
		    
		    $content=$_FILES['content']['name']; 
		    $link = $_POST['link']  ;

			

					echo $q = "INSERT INTO content(faculty_ID,Dept_ID,sID,semester,title,con,file,link) VALUES( '$fid','$did','$sid','$sem','$title','$con','$content','$link')";
					$sql = $conn->prepare($q);
				 	if($sql->execute() == TRUE && move_uploaded_file($_FILES['content']['tmp_name'],$target) )
				 	{

						echo "hi";
					}
					else
					{
						echo "bye";
					}
}


				?>
