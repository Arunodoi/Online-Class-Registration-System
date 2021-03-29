<?php 


include 'connect.php';


   if(isset($_POST['update']))
          {
            $id = $_POST['id3'];
            $d=$_POST['dept_name'];
             $sub=$_POST['sub_name'];
             $t=$_POST['title'];
              $l=$_POST['link'];
             
                      

                     $sql = $conn->prepare("UPDATE videos SET Dept_ID='$d', sID = '$sub', title = '$t' , link = '$l' WHERE vid='$id' ");

                  if($sql->execute())
                  {
                    
                $_SESSION['message'] = "Record have been Updated";
                $_SESSION['msg_type'] = "warning";
                header("location:allvid.php");
                 } 




		}





 








	?>