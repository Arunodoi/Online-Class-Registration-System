
<?php
session_start();
include 'connect.php';


         if (isset($_POST['B'])) {

                       

                        $username=$_POST['username'];
                        $password=$_POST['password'];
                                               
                            
                            $sql = $conn->prepare("SELECT * from admin where username='$username' and password='$password'");


                        if($sql->execute()==TRUE)
                        {
                            
                            $row=$sql->rowCount();
                            
                            if($row==1)
                            {

                            $_SESSION['user'] =  $username;    
                            header('location:admin_home.php');}
                          
                            }
                        }

                        else 
                            {
                           
                            header("location:admin_login.php");
                            $_SESSION['message'] = "Invalid username and password";
                            $_SESSION['msg_type'] = "danger";
                            }
                          


?>