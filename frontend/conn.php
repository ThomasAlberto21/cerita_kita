<?php

   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname    = "cerita_kita";
   $conn = mysqli_connect ($hostname,$username,$password,$dbname) or die (mysqli_error());
   mysqli_select_db ($conn,$dbname) or die (mysqli_error());
   
?>