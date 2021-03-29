<?php

include 'connect.php';


         if (isset($_POST['B'])) {

                       

                        $username=$_POST['username'];
                        $password=$_POST['password'];
                                               
                            
                            $sql = $conn->prepare("SELECT * from faculty where mobile_no='$username' and password='$password'");
                            $sql->execute();
                            $row=$sql->rowCount();
                            $res = $sql->fetchAll();
                           
                            
                            if($row==1)
                            {

                            header('location:faculty_dash.php');
                            //print_r($res['name']);

                            }

                            else 
                            {
                            $_SESSION['message'] = "Invalid username and password";
                            $_SESSION['msg_type'] = "danger";
                            header("location:faculty_login.php");
                            }


                


                }


?>