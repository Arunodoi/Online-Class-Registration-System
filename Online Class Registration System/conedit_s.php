<?php 


include 'connect.php';


   if(isset($_POST['update']))
          {




          
            $id = $_POST['id3'];
            $d=$_POST['dept_name'];
             $sub=$_POST['sub_name'];
             $t=$_POST['title'];
              $c=$_POST['con'];
                

               
        
             
             

                  $sql = $conn->prepare("UPDATE content SET Dept_ID='$d', sID = '$sub', title = '$t' , con = '$c'  WHERE c_id='$id' ");

                  if($sql->execute())
                  {
                    
                $_SESSION['message'] = "Record have been Updated";
                $_SESSION['msg_type'] = "warning";
                header("location:allcon.php");
                 } 




		}





 








	?>