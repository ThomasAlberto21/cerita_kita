<?php 
if(isset($_POST['submit']))
$to = 'ridhoadhari82.com';
$subject = $_POST['email'];  
$message = $_POST['pesan'];
// $header = "From :" .$_POST['email_from'].phpversion();
$headers = array('From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion());

mail($to,$subject,$message,$header);
header('location:../../frontend/index.php');
?>