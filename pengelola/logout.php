<?php 

session_start();
unset($_SESSION["id_user"]);
session_destroy();
header("Location: ../Login/login.php");

 ?>