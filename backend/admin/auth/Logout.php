<?php 
session_start();
session_destroy();
header('location:../../../frontend/Login.php');
// header('location:../../../frontend/index.php');
?>