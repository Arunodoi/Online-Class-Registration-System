<?php


        $mysql_host='localhost';
        $mysql_user='root';
        $mysql_pass='';
        $db ='online_class';
        // $conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$db);
        $conn = new PDO("mysql:host=$mysql_host;dbname=online_class", $mysql_user, $mysql_pass);
       ?>