<?php

session_start();
unset($_SESSION['user1']);
unset($_SESSION['user']);
unset($_SESSION['user2']);

header("location:index.php");

?>
