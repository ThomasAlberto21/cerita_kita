<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>wokwok
    </h1>
    <form action="../../backend/upload.php" method="post" enctype="multipart/form-data">
        <h2>PHP Upload File</h2>
        <label for="file_name">Filename:</label>
        <input type="file" name="anyfile" id="anyfile">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>
   <?php
  include '../../backend/conn.php';

  $data = mysqli_query($conn,"select * from foto");
  while($d = mysqli_fetch_array($data)){
    ?>
<!-- <img src="../images/20230331102007.jpg" alt="" srcset=""> -->
  <fieldset>
                    <img src="<?php echo $d['foto']?>" class="img-fluid" alt="">
                    <fieldset>
<?php echo $d['foto']; ?>
<?php 
	}
  ?>
</body>
</html>