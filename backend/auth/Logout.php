<?php 
session_start();
session_destroy();
header('location:../../frontend/admin/Login.php');
// header('location:../../../frontend/index.php');
?>