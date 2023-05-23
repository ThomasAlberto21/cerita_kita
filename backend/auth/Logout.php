<?php 
session_start();
session_destroy();
header('location:../../frontend/admin/login.php');
// header('location:../../../frontend/index.php');
?>