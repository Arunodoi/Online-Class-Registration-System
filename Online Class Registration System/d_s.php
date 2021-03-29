<?php
session_start();
        
       
        require_once'connect.php';

        $dept_name='';
        $semester = '';
        $subject = '';



         if (isset($_POST['add'])) 
         {

                       

                        $dept_name=$_POST['dept_name'];
                      

          $sql = $conn->prepare("INSERT INTO department (Department_Name) VALUES('$dept_name')");


            if($sql->execute())
            {
                $_SESSION['message'] = "Record have been Saved";
                $_SESSION['msg_type'] = "success";

                header("location:department.php");
            } 
        }

        



          if(isset($_POST['delete']))
          {
             $id = $_POST['id'];

             $sql = $conn->prepare( "DELETE FROM department WHERE Dept_ID=$id");
            if($sql->execute())
            {
                $_SESSION['message'] = "Record have been Deleted";
                $_SESSION['msg_type'] = "danger";
                header("location: department.php");
            } 
          }






              if(isset($_POST['update']))
          {
             $id = $_POST['id'];
                    $dept_name=$_POST['dept_name'];
                  

                     $sql = $conn->prepare("UPDATE department SET Department_Name='$dept_name' WHERE Dept_ID=$id");

                      if($sql->execute())
                  {
                $_SESSION['message'] = "Record have been Updated";
                $_SESSION['msg_type'] = "warning";
                header("location:department.php");
                 } 

        

                
          }
             
    


        


    
           ?>