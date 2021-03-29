<?php
session_start();
        
       
        require_once'connect.php';


        



      

           if(isset($_POST['update']))
          {
            $id = $_POST['id2'];
                  
         
               $name = $_POST['sname'];
               $dept_id = $_POST['dept_name'];
               $sem = $_POST['sem'];
               $mobile_no = $_POST['smob'];
               

      

              $sql = $conn->prepare("UPDATE student SET sname = '$name', Dept_ID='$dept_id', sem = '$sem' , smob = '$mobile_no' WHERE sid=$id ");

                if($sql->execute())
                  {
                    
                $_SESSION['message'] = "Record have been Updated";
                $_SESSION['msg_type'] = "warning";
                header("location:vstud.php");
                 } 

        

                
          }
        



      

        


    
           ?>