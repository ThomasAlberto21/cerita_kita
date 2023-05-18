
<?php
session_start();
require '../../backend/conn.php';
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Silahkan Login Terlebih Dahulu!');window.location.href='../../backend/auth/Session.php'</script>";
}

?>

  <?php include '../section/admin_header.php' ?>
  <style>
  @keyframes fade-inout {
    0% {
      opacity: 1;
    }

    50% {
      opacity: 0.5;
    }

    50% {
      opacity: 0.5;
    }

    100% {
      opacity: 0;
    }


  }

  .alert {
    animation: fade-inout 2s linear forwards;
    /* text-align: center; */
    color: green;
  }
</style>
  <!-- <body> -->
    <div class="container">
    <div class="header">
      <h1>Activity</h1>
      <!-- <a href="../../backend/auth/Logout.php"><i class="fa-solid fa-right-from-bracket fa-lg"></i>Logout</a> -->
    </div>
    <p>Hi ,<?php echo $_SESSION['username'] ?></p>
    <div class="alert">
      <?php if (isset($_SESSION['status'])) {
        echo $_SESSION['status'];
      } ?>
    </div>
    <?php unset($_SESSION['status']); ?>
    <form action="../../backend/proses/activity_proses.php" method="post" enctype="multipart/form-data">
      <!-- Form Judul -->
      <label for="">Judul</label>
      <input type="text" name="judul" id="" placeholder="Masukkan Judul" />
      
      <!-- Form Tanggal -->
      <label for="">Tanggal</label>
      <input type="date" name="tanggal" id="" />
      
      <!-- Form Gambar -->
      <label for="file_name">Gambar</label>
        <input type="file" name="gambar" id="gambar">
      <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
      <br>  
      <!-- Form Deskripsi -->
      <label for="">Deskripsi</label>
      <textarea name="keterangan" id="" rows="15"></textarea>
      <button type="submit" name="submit">Submit</button>
    </form>
</div>
<?php include '../section/admin_footer.php' ?>