
<?php
session_start();
require '../../backend/conn.php';
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Silahkan Login Terlebih Dahulu!');window.location.href='../../backend/auth/Session.php'</script>";
}

?>

  <?php include '../section/admin_header.php' ?>
  
  <style>
  @keyframes pesan {
    0% {
      opacity: 1;
    }

    100% {
      opacity: 0;
    }


  }
  @keyframes nama {
    0% {
      opacity: 0;
    }

    50%{
      opacity: 0;
    }
    50%{
      opacity: 0;
    }
    100% {
      opacity: 1;
    }


  }
.box{
  position: absolute;
}
  .pesan {
    animation: pesan 2s linear forwards;
    /* text-align: center; */
    color: green;
  }
  .nama{
    animation: nama 3s alternate;
    /* text-align: center; */
    color: black;

  }
  .nama_unset{
    /* text-align: center; */
    color: black;

  }
  
</style>
  <!-- <body> -->
    <div class="container">
      <h1>Activity</h1>
        <div class="box pesan"><?php if (isset($_SESSION['status'])) {echo $_SESSION['status'];} ?></div>
        <!-- <div class="box nama"> <p >Hi ,<?php echo $_SESSION['username'] ?></p></div> -->
        <?php unset($_SESSION['status']); echo ' <div class="box nama"> <p >Hi ,'.$_SESSION["username"].'</p></div>'; ?>
    <form action="../../backend/proses/activity_proses.php" method="post" enctype="multipart/form-data">
      <!-- Form Judul -->
      <label for="">Judul</label>
      <input type="text" name="judul" id="" placeholder="Masukkan Judul" require autofocus/>
      
      <!-- Form Tanggal -->
      <label for="">Tanggal</label>
      <input type="date" name="tanggal" id="" />
      
      <!-- Form Gambar -->
      <label for="file_name">Gambar</label>
        <input type="file" name="gambar" id="gambar">
      <p><strong>Note:</strong> Hanya format .jpg, .jpeg, .gif, .png yang diizinkan hingga ukuran maksimal 5 MB.</p>
      <br>  
      <!-- Form Deskripsi -->
      <label for="">Deskripsi</label>
      <textarea name="keterangan" id="" rows="15"></textarea>
      <button type="submit" name="submit">Submit</button>
    </form>
</div>
<?php include '../section/admin_footer.php' ?>