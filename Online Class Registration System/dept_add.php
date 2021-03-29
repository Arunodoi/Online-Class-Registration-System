<?php
session_start();
        
       
        require_once'connect.php';


        $subject = '';
        $dept_name='';
        $semester = '';
        



         if (isset($_POST['add'])) 
         {

                       

          $subject=$_POST['subject'];
            $dept_name=$_POST['dept_name'];
              $semester=$_POST['sem'];
                      

          $sql = $conn->prepare("INSERT INTO dept(Subject,Dept_ID,Semester) VALUES('$subject','$dept_name','$semester')");


            if($sql->execute())
            {
              
                $_SESSION['message'] = "Record have been Saved";
                $_SESSION['msg_type'] = "success";
                header("location:dept.php");
            } 
        }


           if(isset($_POST['delete']))
          {
             $id = $_POST['id'];

             $sql = $conn->prepare( "DELETE FROM dept WHERE sID=$id");
            if($sql->execute())
            {
                $_SESSION['message'] = "Record have been Deleted";
                $_SESSION['msg_type'] = "danger";
                header("location: dept.php");
            } 
          }


           if(isset($_POST['update']))
          {
            $id = $_POST['id2'];
                  
          $subject=$_POST['subject'];
            $dept_name=$_POST['dept_name'];
              $semester=$_POST['sem'];
                      

                     $sql = $conn->prepare("UPDATE dept SET Subject = '$subject', Dept_ID='$dept_name', Semester = '$semester' WHERE sID=$id ");

                  if($sql->execute())
                  {
                    
                $_SESSION['message'] = "Record have been Updated";
                $_SESSION['msg_type'] = "warning";
                header("location:dept.php");
                 } 

        

                
          }
        



      

        


    
           ?>